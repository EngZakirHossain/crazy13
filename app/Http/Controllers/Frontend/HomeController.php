<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Member;
use App\Models\Gallery;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\Builder;

class HomeController extends Controller
{
    public function index(){

      return view('frontend.index');
    }
    public function about(){

        return view('frontend.pages.about');
    }
    public function weMourn(){
        $passedMembers = Member::where('live',2)->get();
        return view('frontend.pages.weMourn',compact('passedMembers'));
    }
    public function rollNo(){
        $members = Member::all();
        return view('frontend.pages.rollNo',compact('members'));
    }
    public function rollNoDetails($slug){
        $rollNoDetails = Member::whereSlug($slug)->first();
        return view('frontend.pages.rollNoDetails',compact('rollNoDetails'));
    }

    public function memory(){

        $photos = Gallery::all();
        return view('frontend.pages.memory',compact('photos'));
    }


}
