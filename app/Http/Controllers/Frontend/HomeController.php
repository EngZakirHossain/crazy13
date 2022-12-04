<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){

      return view('frontend.index');
    }
    public function about(){

        return view('frontend.pages.about');
    }
    public function weMourn(){

        return view('frontend.pages.weMourn');
    }
    public function rollNo(){

        return view('frontend.pages.rollNo');
    }
    public function memory(){

        $photos = \App\Models\Gallery::all();
        return view('frontend.pages.memory',compact('photos'));
    }


}
