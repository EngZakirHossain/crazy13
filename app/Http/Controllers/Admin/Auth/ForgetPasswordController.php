<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Mail;

class ForgetPasswordController extends Controller
{
    //return view using this function
    public function index(){
      return view('admin.auth.forget');
    }
    //forget password form submit
    public function submitForgetPasswordForm(Request $request){

        //validate request form
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        //genereate token
        $token = Str::random(60);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send('admin.auth.email', ['token' => $token], function($message) use($request){
            $message->to($request->email)
                    ->subject('Reset Password');
        });


        return back()->with('email_send_success', 'We have e-mailed your password reset link');
    }

}
