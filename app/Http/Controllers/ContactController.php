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
            $data->telephone = request('telephone');
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
        $data->telephone = request('telephone');
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


    //Test Function
    public function Test(){



        function formatMobileNumber($phone_number)
        {
            $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
            preg_match('/(\d{4})(\d{3})(\d{4})/', $cleaned, $matches);
            return "(+88 ) {$matches[1]} - {$matches[2]}-{$matches[3]}";
        }

        function formatTelePhoneNumber($phone_number)
        {
            $cleaned = preg_replace('/[^[:digit:]]/', '', $phone_number);
            preg_match('/(\d{2})(\d{4})(\d{4})(\d{1})/', $cleaned, $matches);
            return "(+88 ) {$matches[1]} - {$matches[2]} {$matches[3]}-{$matches[4]}";
        }

        echo formatMobileNumber("01707080401");

        echo formatTelePhoneNumber("06822518124");

    }

}
