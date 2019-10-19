<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
class EventController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.news.event.add');
    }

    //All
    public function All()
    {
        $allData = Event::orderBy('id', 'desc')->get();
        return view('admin.news.event.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required | min:3 | max:100',
            'date' => 'required',
            'details' => 'required | min:10 | max: 1000',
            'image' => 'max:500', // file only jgp and size Not more than 500 kb
            'document' => 'max:5000', // file only jgp and size Not more than 500 kb
        ]);
        $data = new Event();
        //For Image
        $image = $request->file('image');
        if (!empty($image)) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/event/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data->image = $image_url;
            }
        }
        //For Documents
        $document = $request->file('document');
        if (!empty($document)) {
            $doc_name = str_random(5);
            $ext = strtolower($document->getClientOriginalExtension());
            $doc_full_name = $doc_name . '.' . $ext;
            $doc_upload_path = 'public/images/event/';
            $doc_url = $doc_upload_path . $doc_full_name;
            $success = $document->move($doc_upload_path, $doc_full_name);
            if ($success) {
                $data->document = $doc_url;
            }
        }
        $data->date = request('date');
        $data->title = request('title');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('event.all')->with($notification);
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
        $data = Event::find($id);
        $image_path = $data->image;
        if (!empty($image_path)) {
            //Delete Existing File
            @unlink($image_path);
        }
        $doc_path = $data->document;
        if (!empty($doc_path)) {
            //Delete Existing File
            @unlink($doc_path);
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
        $data = Event::findOrFail($id);
        // print_r($data);
        return view('admin.news.event.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = Event::find($id);
        //For Image
        $image = $request->file('image');
        if (!empty($image)) {
            $image_path = $data->image;
            //Delete Existing File
            @unlink($image_path);

            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/event/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data->image = $image_url;
            }
        }
        //For Documents
        $document = $request->file('document');
        if (!empty($document)) {
            $doc_path = $data->document;
            //Delete Existing File
            @unlink($doc_path);

            $doc_name = str_random(5);
            $ext = strtolower($document->getClientOriginalExtension());
            $doc_full_name = $doc_name . '.' . $ext;
            $doc_upload_path = 'public/images/event/';
            $doc_url = $doc_upload_path . $doc_full_name;
            $success = $document->move($doc_upload_path, $doc_full_name);
            if ($success) {
                $data->document = $doc_url;
            }
        }
        $data->title = request('title');
        $data->date = request('date');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('event.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
