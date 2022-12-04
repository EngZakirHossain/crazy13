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
        $passedMembers = \App\Models\Member::where('live',2)->get();
        return view('frontend.pages.weMourn',compact('passedMembers'));
    }
    public function rollNo(){
        $members = \App\Models\Member::all();
        return view('frontend.pages.rollNo',compact('members'));
    }
    public function rollNoDetails($id){
        $rollNoDetails = \App\Models\Member::findorFail($id);
        return view('frontend.pages.rollNoDetails',compact('rollNoDetails'));
    }

    public function memory(){

        $photos = \App\Models\Gallery::all();
        return view('frontend.pages.memory',compact('photos'));
    }


}
