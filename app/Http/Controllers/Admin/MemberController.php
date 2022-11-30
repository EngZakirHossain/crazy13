<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Jobs\VerifyUserJob;
use App\Models\Member;
use App\Models\User;
use App\Notifications\NewAdminAdded;
use App\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MemberController extends Controller
{
    //show all user
    public function index(Request $request){

        $members = Member::all();
        if ($request->search != null) {
            $members = Member::where('name','LIKE', '%'.$request->search.'%')
                ->orWhere('email','LIKE','%'.$request->search.'%')
                ->get();
        }
        return view('admin.member.index')->with('members',$members);
    }

    //register new user function
    public function store(Request $request){


        //validation rule
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:members,email',
            'phone' => 'required',
            'designation' => 'required',
        ]);


        //store in Member table(user information)
        $member = Member::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'designation' => $request->designation,
            'status' => $request->status,
            'added_by' => Auth::user()->email,
            'created_at' => Carbon::now(),
        ]);

        //upload profile photo
        if($request->hasFile('photo')){

            $image = $request->file('photo');
            $name = $request->name."_".$member->id.".".$image->getClientOriginalExtension();
            $destination = public_path('photo/members_photos/');
            $image->move($destination,$name);
            Member::findOrFail($member->id)->update([
                'photo' => $name,
            ]);
        }

        return back()->with('member_added_success', 'Member Added Successfully');

    }

//    //user udpate function
//    public function update(Request $request, $id){
//        $request->validate([
//            'role' => 'required',
//            'status' => 'required',
//        ]);
//
//        Member::findOrFail($id)->update([
//            'role' => $request->role,
//            'status' => $request->status,
//            'edited_by' => Auth::user()->email,
//        ]);
//
//        return back()->with('user_update_success', 'User Updated Successfully');
//    }
//
//    //user active function
//    public function active($id){
//        Member::findOrFail($id)->update([
//            'status' => '1',
//        ]);
//
//        return back()->with('user_active_success', 'User Activated Successfully');
//
//    }
//    //user De-active function
//    public function deactive($id){
//        Member::findOrFail($id)->update([
//            'status' => '2',
//        ]);
//
//        return back()->with('user_deactive_success', 'User Deactivated Successfully');
//
//    }
//
    //Member Delete function
    public function destroy($id){

        //photo unlink
        $name = Member::findOrFail($id)->photo;
        if($name != 'default.png'){
            $old_photo_location = public_path('photo/member_photos/').$name;
            unlink($old_photo_location);
        }

        //user delete
        Member::findOrFail($id)->forceDelete();
        return response()->json(['status' => 'Deleted Success']);
    }
}
