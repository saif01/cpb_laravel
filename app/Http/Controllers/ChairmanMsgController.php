<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ChairmanMsg;

class ChairmanMsgController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.about.chairman-msg.add');
    }

    //All
    public function All()
    {
        $allData = ChairmanMsg::orderBy('id', 'desc')->get();
        return view('admin.about.chairman-msg.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $validateData = $request->validate([
            'details' => 'required | min:10 | max: 1000',
            'image' => 'max:500', // file only jgp and size Not more than 500 kb
        ]);
        $data = new ChairmanMsg();

        $image = $request->file('image');
        if (!empty($image)) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/chairman/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data->image = $image_url;
            }
        }
        $data->name = request('name');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('chairman.msg.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function Delete($id)
    {
        $data = ChairmanMsg::find($id);
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

    //edit
    public function editFormShow($id)
    {
        $data = ChairmanMsg::findOrFail($id);
        // print_r($data);
        return view('admin.about.chairman-msg.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = ChairmanMsg::find($id);
        $image = $request->file('image');
        if (!empty($image)) {
            $image_path = $data->image;
            //Delete Existing File
            @unlink($image_path);

            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/chairman/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data->image = $image_url;
            }
        }
        $data->name = request('name');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('chairman.msg.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
