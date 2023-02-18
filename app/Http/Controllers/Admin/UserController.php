<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\VerifyUser;
use App\Models\User;
use App\Jobs\VerifyUserJob;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //show all user
    public function index(Request $request){

        $users = User::whereIn('role',[2,3,4,5])->where('status','1')->get();
        if ($request->search != null) {
            $users = User::where('name','LIKE', '%'.$request->search.'%')
                            ->orWhere('email','LIKE','%'.$request->search.'%')
                            ->where('status','1')->get();
        }

      return view('admin.user.index',[
          'user_infos' => $users,
          'deactive_user_infos' => User::whereIn('role',[2,3,4,5])->where('status','2')->get(),


      ]);
    }

    //register new user function
    public function store(Request $request){


        //validation rule
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8|confirmed',
            'role' => 'required',
            'status' => 'required',
        ]);


        //store in user table(user information)
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'added_by' => Auth::user()->email,
            'created_at' => Carbon::now(),
        ]);

        //upload profile photo
        if($request->hasFile('photo')){

            $image = $request->file('photo');
            $name = $request->name."_".$user->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/profile_photos/');
            $image->move($destination,$name);
            User::findOrFail($user->id)->update([
                'photo' => $name,
            ]);
        }

        // insert token  and  user id in verifyuser table
        VerifyUser::create([
            'token' => Str::random(60),
            'user_id' => $user->id,
        ]);

        //dispatch job and send mail using queue
        dispatch(new VerifyUserJob($user))->delay(now()->addSeconds(0));

        // $users = User::all();
        // foreach ($users as $user) {

        //     $user->notify(new NewAdminAdded($request->name));
        // }
        return back()->with('user_added_success', 'User Added Successfully');


    }




    //user udpate function
    public function update(Request $request, $id){
        $request->validate([
            'role' => 'required',
            'status' => 'required',
        ]);

        User::findOrFail($id)->update([
            'role' => $request->role,
            'status' => $request->status,
            'edited_by' => Auth::user()->email,
        ]);

        return back()->with('user_update_success', 'User Updated Successfully');
    }

    //user active function
    public function active($id){
        User::findOrFail($id)->update([
            'status' => '1',
        ]);

        return back()->with('user_active_success', 'User Activated Successfully');

    }
    //user De-active function
    public function deactive($id){
        User::findOrFail($id)->update([
            'status' => '2',
        ]);

        return back()->with('user_deactive_success', 'User Deactivated Successfully');

    }

    //ueser Delete function
    public function destroy($id){

        //photo unlink
        $name = User::findOrFail($id)->photo;
        if($name != 'default.png'){
            $old_photo_location = public_path('photo/profile_photos/').$name;
            unlink($old_photo_location);
        }

        //user delete
        User::findOrFail($id)->forceDelete();
        return response()->json(['status' => 'Deleted Success']);
    }



}
