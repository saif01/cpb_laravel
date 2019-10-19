<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Structure;

class StructureController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.about.structure.add');
    }

    //All
    public function All()
    {
        $allData = Structure::orderBy('id', 'desc')->get();
        return view('admin.about.structure.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {

        $data = new Structure();

        $data->analysis = request('analysis');
        $data->design = request('design');
        $data->development = request('development');
        $data->testing = request('testing');
        $data->go_Live = request('go_Live');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('structure.all')->with($notification);
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
        $data = Structure::find($id);
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
        $data = Structure::findOrFail($id);
        // print_r($data);
        return view('admin.about.structure.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = Structure::find($id);
        $data->analysis = request('analysis');
        $data->design = request('design');
        $data->development = request('development');
        $data->testing = request('testing');
        $data->go_Live = request('go_Live');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('structure.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
