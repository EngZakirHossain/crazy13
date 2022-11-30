<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\AdminChangePasswordJob;
use App\Models\User;
use Auth;
use Hash;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('admin.user.profile');
    }

    //return profile edit page
    public function profile_edit(){
        return view('admin.user.profile_edit');
    }
    //return change passwrod page
    public function change_password(){
        return view('admin.user.change_password');
    }



    //update profile basic information
    public function update(Request $request, $id){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        //update photo
        if ($request->hasFile('photo')) {
            //find old photo name and detele
            $old_photo_name = User::findOrFail($id)->photo;
            if($old_photo_name != 'default.png'){
                $old_photo_location = public_path('photo/profile_photos/').$old_photo_name;
                unlink($old_photo_location);
            }
                //save new photo and update information
                $image = $request->file('photo');
                $name = $request->name."_".$id.".".$image->getClientOriginalExtension();
                $destination = public_path('photo/profile_photos/');
                $image->move($destination,$name);
                User::findOrFail($id)->update([
                    'photo' => $name,
                ]);
         }
         if($request->email != Auth::user()->email){
            $request->validate([
                'email' => 'unique:users',
            ]);
            User::findOrFail($id)->update([

                'name' => $request->name,
                'email' => $request->email,

            ]);
         }
         User::findOrFail($id)->update([
            'name' => $request->name,
         ]);

        return back()->with('profile_update_success','Profile Information updated successfully');
    }

    //change password
    public function update_password(Request $request,$id){
        $request->validate([
            'old_password' => 'required',
            'password' => 'required|confirmed',
            'password_confirmation' => 'required',
        ]);

        if (Hash::check($request->old_password,Auth::user()->password)) {
            if($request->old_password == $request->password){
                return back()->with('can_not_same_as_old_password','New Password Can not be same as Old Password');
            }
            else{
                User::findOrFail($id)->update([
                    'password' => Hash::make($request->password),
                ]);

                //send email notification to user because of chagne password

                $email = Auth::user()->email;
                $name = Auth::user()->name;
                dispatch(new AdminChangePasswordJob($email,$name))->delay(now()->addSeconds(1));

                //send mail finished


                return back()->with('change_password_success','Password Change Successfully');

            }
        }
        else{
            return back()->with('old_password_can_not_match','Old Passowrd Can not be Correct!!!');
        }


    }

}
