<?php

namespace App\Http\Controllers\Admin;

use File;
use App\Models\Member;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;

class MemberController extends Controller
{
    //show all user
    public function index(Request $request){

        $members = Member::all();
        if ($request->search != null) {
            $members = Member::where('name','LIKE', '%'.$request->search.'%')
                ->orWhere('email','LIKE','%'.$request->search.'%')
                ->latest()
                ->get();
        }
        return view('admin.member.index',compact('members'));
    }

    //create user

    public function create(){

        return view('admin.member.create');
    }


    //register new user function
    public function store(Request $request){


        //validation rule
        $request->validate([
            'name' => 'required|string|max:255',
            'live' => 'required|numeric',
            'email' => 'required|unique:members,email',
            'phone' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'designation' => 'required|string',
            'address' => 'required|string',
        ]);



        //store in Member table(user information)
        $member = Member::create([
            'name' => $request->name,
            'slug' => Str::slug($request->name) ,
            'email' => $request->email,
            'phone' => $request->phone,
            'live' => $request->live,
            'designation' => $request->designation,
            'address' => $request->address,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
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
        Toastr::success('Data Created Successfully');
        return redirect()->route('admin.members');

    }
//edit member
    public function edit($slug){

        $member = Member::whereSlug($slug)->first();
        return view('admin.member.edit',compact('member'));
    }



    //member update function
    public function update(Request $request, $slug){

        $request->validate([
            'name' => 'required|string|max:255',
            'live' => 'required|numeric',
            'email' => 'required',
            'phone' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'designation' => 'required|string',
            'address' => 'required|string',
        ]);

        $member = Member::whereSlug($slug)->first();

        if($request->photo != ''){
            $path = ('photo/members_photos/');

            if ($member->photo != '' && $member->photo != null) {
                $file_old = $path . $member->photo;
                unlink($file_old);
            }
            //upload new file
            $image = $request->file('photo');
            $name = $request->name."_".$member->id.".".$image->getClientOriginalExtension();
            $image->move($path, $name);
            //for update in table
            $member->update(['photo' => $name]);
        }

        $member->update([
             'name' => $request->name,
            'slug' => Str::slug($request->name) ,
            'email' => $request->email,
            'phone' => $request->phone,
            'live' => $request->live,
            'designation' => $request->designation,
            'address' => $request->address,
            'facebook_link' => $request->facebook_link,
            'instagram_link' => $request->instagram_link,
            'linkedin_link' => $request->linkedin_link,
            'status' => $request->status,
            'live' => $request->live,
            'updated_by' => Auth::user()->email,
        ]);
        Toastr::success('Data Updated Successfully');
        return redirect()->route('admin.members');
    }

    //Member Delete function
    public function destroy(Request $request){

        //photo unlink
        $member = Member::where('id',$request->id)->first();

        $old_photo_location = public_path('photo/members_photos/').$member->photo;
        if (File::exists($old_photo_location)) {
            unlink($old_photo_location);
        }
        //Member delete
        $member->delete();

        return response()->json(['success'=>'Member deleted successfully!']);
    }
}
