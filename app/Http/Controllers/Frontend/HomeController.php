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

    
}
