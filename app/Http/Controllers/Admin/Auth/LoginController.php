<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use Redirect;
class LoginController extends Controller
{
    // for view function
    public function index(){
        return view('admin.auth.login');
    }

    // authenticate function
    public function authenticate(Request $request){
      $credintials = $request->only('email' , 'password');

      $remember_me = $request->has('remember') ? true : false;

      if ($request->has('remember')) {
        if (Auth::attempt($credintials, $remember_me)) {
            return redirect()->route('admin.home');
        }
      }

      if(Auth::attempt($credintials)){
        //Authenticate passed
        //now check user is verified or not 
        if(Auth::user()->email_verified_at == null){
          Auth::logout();
          return \redirect(route('admin.login'))->with('user_not_verified','Please, First veify your email');
        }
        return redirect()->route('admin.home');
      }

      //for remembering password(when checkbox is clicked)



      return redirect()->back()->with('error', 'Oppes! You have entered invalid credentials');

    }


}
