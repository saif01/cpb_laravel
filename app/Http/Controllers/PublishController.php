<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class PublishController extends Controller
{
    public function PublishStatus($id, $table, $filed, $value)
    {
        $PublisherId= Session::get('id');
        $successData = DB::table($table)->where('id', $id)
            ->update(array($filed => $value, 'publish_by'=> $PublisherId));
        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Published',
                'alert-type' => 'info'
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
