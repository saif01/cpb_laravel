<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Headquarter;
class HeadquarterController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.about.headqarter.add');
    }

    //All
    public function All()
    {
        $allData = Headquarter::orderBy('id', 'desc')->get();
        return view('admin.about.headqarter.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {

        $data = new Headquarter();

        $data->country = request('country');
        $data->company = request('company');
        $data->address = request('address');
        $data->phone = request('phone');
        $data->email = request('email');
        $data->website = request('website');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('headqarter.all')->with($notification);
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
        $data = Headquarter::find($id);
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
        $data = Headquarter::findOrFail($id);
        // print_r($data);
        return view('admin.about.headqarter.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = Headquarter::find($id);
        $data->country = request('country');
        $data->company = request('company');
        $data->address = request('address');
        $data->phone = request('phone');
        $data->email = request('email');
        $data->website = request('website');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('headqarter.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }
}
