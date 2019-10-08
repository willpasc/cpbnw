<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ContactMessage;
use App\Models\Portofolio;
use App\Models\PortofolioImage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PortfolioController extends Controller
{
    public function show(int $id)
    {
        $portofolio = Portofolio::find($id);

        return view('frontend.portfolio.show', compact('portofolio'));
    }
}
