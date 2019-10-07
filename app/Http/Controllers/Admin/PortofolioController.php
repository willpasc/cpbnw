<?php
/**
 * Created by PhpStorm.
 * User: YANSEN
 * Date: 12/10/2018
 * Time: 10:06
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\libs\Utilities;
use App\Models\Category;
use App\Models\Portofolio;
use App\Models\PortofolioImage;
use App\Transformer\PortofolioTransformer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use Yajra\DataTables\DataTables;

class PortofolioController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function getIndex(Request $request){
        $users = Portofolio::all();
        return DataTables::of($users)
            ->setTransformer(new PortofolioTransformer())
            ->addIndexColumn()
            ->make(true);
    }

    public function index()
    {
        return view('admin.portofolio.index');
    }

    public function show(Portofolio $item)
    {
        $images = PortofolioImage::where('portofolio_id', $item->id)->orderby('is_main_image','desc')->get();
        $productCategory = Category::where('portofolio_id', $item->id)->first();

        $data = [
            'product'    => $item,
            'productCategory'    => $productCategory,
            'images'    => $images,
        ];
        return view('admin.portofolio.show')->with($data);
    }

    public function create()
    {
        $portofolio = Portofolio::find(1);
        $categories = Category::all();

        $data = [
            'categories'    => $categories,
            'product'    => $portofolio,
        ];
        return view('admin.portofolio.create')->with($data);
    }

    public function store(Request $request)
    {
        try{
            $validator = Validator::make($request->all(), [
                'name'        => 'required',
                'location'             => 'required',
            ]);

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors())->withInput($request->all());

            if(!$request->hasFile('main_image')){
                return back()->withErrors("Gambar Utama wajib diunggah!")->withInput($request->all());
            }

            $mainImages = $request->file('main_image');

            $dateTimeNow = Carbon::now('Asia/Jakarta');

            $newPortofolio = Portofolio::create([
                'name'          => $request->input('name'),
                'brief'         => $request->input('brief') ?? '',
                'description'   => $request->input('description') ?? '',
                'status'        => 1,
                'created_at'    => $dateTimeNow->toDateTimeString(),
                'updated_at'    => $dateTimeNow->toDateTimeString(),
            ]);

            // save product main image, thumbnail and image detail
            //main image
            $img = Image::make($mainImages);
            $extStr = $img->mime();
            $ext = explode('/', $extStr, 2);
            $filename = $newPortofolio->id.'_main_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

            $img->save(public_path('storage/portofolios/'. $filename), 75);

            PortofolioImage::create([
                'portofolio_id' => $newPortofolio->id,
                'path' => $filename,
                'is_main_image' => 1,
                'is_thumbnail' => 0,
            ]);


            //image detail
            if($request->hasFile('detail_image')){
                $detailImages = $request->file('detail_image');
                for($i = 0; $i < sizeof($detailImages); $i++){
                    $img = Image::make($detailImages[$i]);
                    $extStr = $img->mime();
                    $ext = explode('/', $extStr, 2);

                    $filename = $newPortofolio->id.'_'.$i.'_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                    $img->save(public_path('storage/portofolios/'. $filename), 75);

                    PortofolioImage::create([
                        'portofolio_id' => $newPortofolio->id,
                        'path' => $filename,
                        'is_main_image' => 0,
                        'is_thumbnail' => 0,
                    ]);
                }
            }

            Session::flash('success', 'Sukses membuat baru Portofolio!');
            return redirect()->route('admin.portofolio.edit',['item' => $newPortofolio->id]);

        }catch(\Exception $ex){
            error_log($ex);
            Log::error("Admin/PortofolioController store error: ". $ex);
            return back()->withErrors("Something Went Wrong")->withInput();
        }
    }

    public function edit(Portofolio $item)
    {
        try{
            $categories = Category::all();
            $mainImage = PortofolioImage::where('portofolio_id', $item->id)->where('is_main_image', 1)->first();
            $detailImage = PortofolioImage::where('portofolio_id', $item->id)
                ->where('is_main_image', 0)
                ->where('is_thumbnail', 0)->get();
            $data = [
                'portofolio'    => $item,
                'categories'    => $categories,
                'mainImage'    => $mainImage,
                'detailImage'    => $detailImage,
            ];
            return view('admin.portofolio.edit')->with($data);

        }catch(\Exception $ex){
            Log::error("Admin/PortofolioController edit error: ". $ex);
            dd($ex);
        }
    }

    public function update(Request $request){
        try{
            $validator = Validator::make($request->all(), [
                'name'        => 'required',
                'location'    => 'required',
            ]);

            if ($validator->fails())
                return redirect()->back()->withErrors($validator->errors())->withInput($request->all());

            $portofolio = Portofolio::find($request->input('id'));

            $dateTimeNow = Carbon::now('Asia/Jakarta');

            $portofolio->name = $request->input('name');
            $portofolio->brief = $request->input('brief') ?? '';
            $portofolio->description = $request->input('description') ?? '';
            $portofolio->updated_at = $dateTimeNow->toDateTimeString();

            $portofolio->save();

            // update product main image, thumbnail and image detail
            if($request->hasFile('main_image')){
                $mainImages = $request->file('main_image');
                $mainImage = PortofolioImage::where('portofolio_id', $portofolio->id)->where('is_main_image', 1)->first();
                if(!empty($mainImage)){
                    // Delete old image
                    if(!empty($mainImage->path)){
                        $oldPath = asset('storage/portofolios/'. $mainImage->path);
                        if(file_exists($oldPath)) unlink($oldPath);
                    }

                    $mainImage->delete();
                }

                $img = Image::make($mainImages);
                $extStr = $img->mime();
                $ext = explode('/', $extStr, 2);
                $filename = $portofolio->id.'_main_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                $img->save(public_path('storage/portofolios/'. $filename), 75);

                PortofolioImage::create([
                    'portofolio_id' => $portofolio->id,
                    'path' => $filename,
                    'is_main_image' => 1,
                    'is_thumbnail' => 0,
                ]);
            }
            if($request->hasFile('detail_image')){
                $changedDetailImages = $request->file('detail_image');
                $detailImages = PortofolioImage::where('portofolio_id', $portofolio->id)->where('is_main_image', 0)->where('is_thumbnail', 0)->get();

                // Delete old image
                foreach ($detailImages as $oldImage){
                    if(!empty($oldImage->path)){
                        $oldPath = asset('storage/portofolios/'. $oldImage->path);
                        if(file_exists($oldPath)) unlink($oldPath);
                    }
                    $oldImage->delete();
                }

                for($i = 0; $i < sizeof($changedDetailImages); $i++){
                    $img = Image::make($changedDetailImages[$i]);
                    $extStr = $img->mime();
                    $ext = explode('/', $extStr, 2);

                    $filename = $portofolio->id.'_'.$i.'_'.Carbon::now('Asia/Jakarta')->format('Ymdhms'). '.'. $ext[1];

                    $img->save(public_path('storage/portofolios/'. $filename), 75);

                    PortofolioImage::create([
                        'portofolio_id' => $portofolio->id,
                        'path'          => $filename,
                        'is_main_image' => 0,
                        'is_thumbnail'  => 0,
                    ]);
                }
            }

            Session::flash('success', 'Sukses mengubah data Portofolio!');
            return redirect()->route('admin.portofolio.edit',['item' => $portofolio->id]);

        }catch(\Exception $ex){
            error_log($ex);
            Log::error("Admin/PortofolioController update error: ". $ex);
            return back()->withErrors("Something Went Wrong")->withInput();
        }
    }

    public function getPortofolios(Request $request){
        $term = trim($request->q);
        $roles = Portofolio::where('id', '!=', $request->id)
            ->where(function ($q) use ($term) {
                $q->where('name', 'LIKE', '%' . $term . '%');
            })
            ->get();

        $formatted_tags = [];

        foreach ($roles as $role) {
            $formatted_tags[] = ['id' => $role->id, 'text' => $role->name];
        }

        return \Response::json($formatted_tags);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(Request $request)
    {
        try {
            $deletedId = $request->input('id');
            $portofolio = Portofolio::find($deletedId);
            if(empty($portofolio)){
                return Response::json(array('errors' => 'INVALID'));
            }

            $detailImages = PortofolioImage::where('portofolio_id', $deletedId)->get();

            // Delete old image
            foreach ($detailImages as $oldImage){
                if(!empty($oldImage->path)){
                    $oldPath = asset('storage/portofolios/'. $oldImage->path);
                    if(file_exists($oldPath)) unlink($oldPath);
                }
                $oldImage->delete();
            }

            $portofolio->delete();

            Session::flash('success', 'Sukses menghapus Portofolio!');
            return Response::json(array('success' => 'VALID'));
        }
        catch(\Exception $ex){
            error_log($ex);
            Log::error("Admin/PortofolioController destroy error: ". $ex);
            return Response::json(array('errors' => 'INVALID'));
        }


    }
}
