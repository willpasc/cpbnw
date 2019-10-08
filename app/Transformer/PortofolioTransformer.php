<?php
/**
 * Created by PhpStorm.
 * User: YANSEN
 * Date: 12/10/2018
 * Time: 10:03
 */

namespace App\Transformer;


use App\Models\Portofolio;
use Carbon\Carbon;
use League\Fractal\TransformerAbstract;

class PortofolioTransformer extends TransformerAbstract
{

    public function transform(Portofolio $portofolio){

        try{
            $createdDate = Carbon::parse($portofolio->created_at)->format('d M Y');
            $updatedDate = Carbon::parse($portofolio->updated_at)->format('d M Y');

            $itemShowUrl = route('admin.portofolio.show', ['item' => $portofolio->id]);
            $itemEditUrl = route('admin.portofolio.edit', ['item' => $portofolio->id]);

//            $action = "<a class='btn btn-xs btn-primary' href='".$itemShowUrl."' data-toggle='tooltip' data-placement='top'><i class='fa fa-info'></i></a> ";
            $action = "<a class='btn btn-xs btn-info' href='".$itemEditUrl."' data-toggle='tooltip' data-placement='top'><i class='fa fa-edit'></i></a> ";
            $action .= "<a class='delete-modal btn btn-xs btn-danger' data-id='". $portofolio->id ."' ><i class='fa fa-remove'></i></a>";


            return[
                'name'              => $portofolio->name,
                'introduction'      => $portofolio->introduction,
                'brief'             => $portofolio->brief,
                'created_at'        => $createdDate,
                'update_at'         => $updatedDate,
                'action'            => $action
            ];
        }
        catch (\Exception $exception){
            error_log($exception);
        }
    }
}
