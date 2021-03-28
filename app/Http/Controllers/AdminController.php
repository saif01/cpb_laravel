<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use Session;
use App\UserReg;
use DB;
use App\VisitorLog;

use App\History;
use App\Mission;
use App\ChairmanMsg;
use App\PresidentMsg;
use App\BUoperation;
use App\Structure;
use App\Headquarter;
use App\Press;
use App\Trdev;
use App\Event;
use App\SR;
use App\Community;
use App\News;
use App\Product;
use App\Recruit;

class AdminController extends Controller
{
    //For notification Count
    public static function HistoryNotify(){
       return History::where('status', '!=', '1' )->count();
    }
    //For notification Count
    public static function MissionNotify()
    {
        return Mission::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function ChairmanMsgNotify()
    {
        return ChairmanMsg::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function PresidentMsgNotify()
    {
        return PresidentMsg::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function BUoperationNotify()
    {
        return BUoperation::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function StructureNotify()
    {
        return Structure::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function HeadquarterNotify()
    {
        return Headquarter::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function SRNotify()
    {
        return SR::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function CommunityNotify()
    {
        return Community::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function NewsNotify()
    {
        return News::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function PressNotify()
    {
        return Press::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function TrdevNotify()
    {
        return Trdev::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function EventNotify()
    {
        return Event::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function RecruitNotify()
    {
        return Recruit::where('status', '!=', '1')->count();
    }
    //For notification Count
    public static function ProductNotify()
    {
        return Product::where('status', '!=', '1')->count();
    }


    public function Dashboard()
    {
        $adminData = Admin::count();
        $userData = UserReg::count();
        $recruitData = Recruit::where('deadline', '>=',  date('Y-m-d'))->count();

        $todayVistor = VisitorLog::whereDate('created_at', '=', date('Y-m-d'))->count();

        $chartData = DB::table('visitor_logs')
            ->where('created_at', '>=', (new \Carbon\Carbon)->submonths(12))
            ->select(DB::raw('SUM(count) as `number`'), DB::raw('MONTH(created_at) month'))
            ->groupBy('month')
            ->get();
        //echo $adminData;
        return view('admin.dashboard')
        ->with('adminData', $adminData)
        ->with('userData', $userData)
        ->with('recruitData', $recruitData)
        ->with('todayVistor', $todayVistor)
        ->with('chartData', $chartData);
    }

    //add
    public function Add()
    {
        return view('admin.admin.add');
    }

    //All
    public function All(){
        $allData= Admin::orderBy('id', 'desc')->get();
        return view('admin.admin.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $validateData = $request->validate([
            'login' => 'required | min:3 | max:50',
            'image' => 'required | max:500', // file only jgp and size Not more than 500 kb
        ]);

        $data = new Admin();

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/admin/';
            $image_url = $upload_path . $image_full_name;
            $successImg = $image->move($upload_path, $image_full_name);
        }
        if ($successImg) {
            $data->login = request('login');
            $data->password = request('password');
            $data->name = request('name');
            $data->contact = request('contact');
            $data->email = request('email');
            $data->status = request('status');
            $data->super = request('super');
            $data->image = $image_url;
            $successData = $data->save();
            //echo $data;
        }

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('admin.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //Delete Function
    public function delete($id)
    {
        //if user want to delete his own id
        if (Session::get('id') == $id) {
            $notification = array(
                'messege' => 'You can not delete your own ID',
                'alert-type' => 'warning'
            );
            return Redirect()->back()->with($notification);
        }


        $data = Admin::find($id);
        //Image Path
        $image_path = $data->image;
        if (file_exists($image_path)) {
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

    //Single data Find
    public function singleData(Request $request)
    {
        if ($request->get('id')) {
            $id = $request->get('id');
            $data = Admin::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function editFormShow($id)
    {
        $data = Admin::findOrFail($id);
        // print_r($data);
        return view('admin.admin.edit')->with('singleData', $data);
    }

    //uddate Function
    public function update(Request $request, $id)
    {

        $validateData = $request->validate([
            'image' => 'max:500', // file only jgp and size Not more than 500 kb
        ]);

        $data = new Admin();
        //Id from hidden field
        $data = Admin::find($id);

        $image = $request->file('image');
        if (!empty($image)) {
            $image_path = $data->image;
            //Delete Existing File
            @unlink($image_path);

            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/admin/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $data->image = $image_url;
            }
        }

        $data->name = request('name');
        $data->contact = request('contact');
        $data->email = request('email');
        $data->status = request('status');
        $data->super = request('super');
        $update = $data->save();

        if ($update) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('admin.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

}
