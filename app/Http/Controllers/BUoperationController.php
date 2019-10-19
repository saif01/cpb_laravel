<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BUoperation;

class BUoperationController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.about.business-operation.add');
    }

    //All
    public function All()
    {
        $allData = BUoperation::orderBy('id', 'desc')->get();
        return view('admin.about.business-operation.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $validateData = $request->validate([
            'details' => 'required | min:10 | max: 1000',
        ]);
        $data = new BUoperation();

        $data->title = request('title');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('business-operation.all')->with($notification);
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
        $data = BUoperation::find($id);
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
        $data = BUoperation::findOrFail($id);
        // print_r($data);
        return view('admin.about.business-operation.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = BUoperation::find($id);
        $data->title = request('title');
        $data->details = request('details');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('business-operation.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
