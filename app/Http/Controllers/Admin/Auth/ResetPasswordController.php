<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use DB;
use Hash;
use Illuminate\Http\Request;

class ResetPasswordController extends Controller
{
    //return reset password view
    public function index($token){
        $info = DB::table('password_resets')->where(['token' => $token])->get();
        return view('admin.auth.reset',[
            'token' => $token,
            'email_infos' => $info,
        ]);
    }


    //update password
    public function submitResetPassowrdForm(Request $request){
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|min:8|confirmed',
            'password_confirmation' => 'required',
        ]);




        //email is exists or not check
        $updatePassword = DB::table('password_resets')
                            ->where([
                                'email' => $request->email,
                                'token' => $request->token,
                            ])->first();



        if(!$updatePassword){
            return back()->with('error','Invalid token or timeout');
        }
        User::where('email',$request->email)
            ->update([
                'password' => Hash::make($request->password),
            ]);

        //delete password reset row for this token
        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/admin/login')->with('passowrd_changed','Password Changed Successfully');

    }
}
