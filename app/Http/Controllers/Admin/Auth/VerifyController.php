<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Auth;
use App\VerifyUser;
class VerifyController extends Controller
{
    //verify email for new profile
    public function verifyEmail($token){
        
        $verifiedUser = VerifyUser::where('token',$token)->first();
        if(isset($verifiedUser)){
            $user = $verifiedUser->user;
            if(!$user->email_verified_at){
                $user->email_verified_at = Carbon::now();
                $user->save();
                return redirect('/admin/login/')->with('success','Email Verification Successful, please login');
            }
            else{
                return redirect('/admin/login/')->with('already_success','Your Email has been already Verified, please login');
            }
        }
        else{
            return redirect('/admin/login/')->with('error','plase veify email and try again!!');
        }
    }

}
