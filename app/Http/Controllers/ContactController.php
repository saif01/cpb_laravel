<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
class ContactController extends Controller
{
    //add
    public function Add(){
        return view('admin.contact.add');
    }

     //All
    public function All(){
        $allData= Contact::orderBy('id', 'desc')->get();
        return view('admin.contact.all')->with('allData', $allData);
    }

      //insert
    public function Insert(Request $request)
    {

        $data = new Contact();

            $data->address = request('address');
            $data->phone = request('phone');
            $data->email = request('email');
            $successData = $data->save();
            //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('contact.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    public function Delete($id){
        $data= Contact::find($id);
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
        $data = Contact::findOrFail($id);
        // print_r($data);
        return view('admin.contact.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id )
    {

        $data = Contact::find($id);
        $data->address = request('address');
        $data->phone = request('phone');
        $data->email = request('email');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('contact.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

}
