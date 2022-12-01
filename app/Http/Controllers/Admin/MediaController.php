<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function index(){
        $galleries= Gallery::all();
        return view('admin.gallery.index',compact('galleries'));
    }
//add form data to database
    public function store(Request $request)
    {
        $image = $request->file('file');
        $imageName = $image->getClientOriginalName();
        $saveName = $imageName.'-'.time().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('photo/gallery/'),$imageName);

        $imageUpload = new Gallery();
        $imageUpload->filename = $imageName;
        $imageUpload->original_filename = $saveName;
        $imageUpload->save();
        return back();
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        Gallery::where('filename',$filename)->delete();
        $path=public_path().'photo/gallery/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;
    }

}
