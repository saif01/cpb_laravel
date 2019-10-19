<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;

class PhotoController extends Controller
{
    public function Add(){
        return view('admin.news.photo.add');
    }
    //All
    public function All()
    {
        $allData = Photo::orderBy('id', 'desc')->get();
        return view('admin.news.photo.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $data = new Photo();
        //For Image
        $image = $request->file('file');
        if (!empty($image)) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/photo/';
            $image_url = $upload_path . $image_full_name;
            $image->move($upload_path, $image_full_name);

            $data->image = $image_url;
            $data->save();

        }
    }

    public function Delete($id)
    {
        $data = Photo::find($id);
        $image_path = $data->image;
        if (!empty($image_path)) {
            //Delete Existing File
            @unlink($image_path);
        }

        //Delete from Database
        $success = $data->delete();

        if ($success) {
            $notification = array(
                'messege' => 'Successfully Data Deleted ',
                'alert-type' => 'success'
            );
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
