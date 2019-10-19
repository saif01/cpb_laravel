<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recruit;
use App\UserReg;
use Session;
use DB;

class RecruitController extends Controller
{
    //add
    public function Add()
    {
        return view('admin.recruit.recruit.add');
    }

    //All
    public function All()
    {
        $allData = Recruit::orderBy('id', 'desc')->get();
        return view('admin.recruit.recruit.all')->with('allData', $allData);
    }

    //insert
    public function Insert(Request $request)
    {
        $data = new Recruit();
        $data->job_title = request('job_title');
        $data->deadline = request('deadline');
        $data->location = request('location');
        $data->department = request('department');
        $data->education = request('education');
        $data->description = request('description');
        $data->requirement = request('requirement');
        $data->experience = request('experience');
        $data->salary = request('salary');
        $data->status = request('status');
        $data->publish_by = Session::get('id');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success'
            );
            return Redirect()->route('recruit.all')->with($notification);
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
        $data = Recruit::find($id);
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
        $data = Recruit::findOrFail($id);
        // print_r($data);
        return view('admin.recruit.recruit.edit')->with('data', $data);
    }

    //update
    public function Update(Request $request, $id)
    {

        $data = Recruit::find($id);
        $data->job_title = request('job_title');
        $data->deadline = request('deadline');
        $data->location = request('location');
        $data->department = request('department');
        $data->education = request('education');
        $data->description = request('description');
        $data->requirement = request('requirement');
        $data->experience = request('experience');
        $data->salary = request('salary');
        $data->status = request('status');
        $data->publish_by = Session::get('id');
        $successData = $data->save();
        //echo $data;

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Updated',
                'alert-type' => 'info'
            );
            return Redirect()->route('recruit.all')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //All User
    public function AllUser()
    {
        $allData = UserReg::orderBy('id', 'desc')->get();
        return view('admin.recruit.user.all')->with('allData', $allData);
    }

    //All Application
    public function Application()
    {
        $allData = DB::table('applies')
            ->join('user_regs', 'user_regs.id', '=', 'applies.user_id')
            ->join('recruits', 'recruits.id', '=', 'applies.recruit_id')
            ->select('applies.*', 'recruits.job_title', 'recruits.deadline', 'user_regs.*')
            ->get();

        // echo "<pre>";
        // Print_r($applyData);
        return view('admin.recruit.application.all')->with('allData', $allData);
    }

    //Recruit Details
    public function RecruitDetails(Request $request){

        $id= $request->id;
        $data= Recruit::find($id);

        $output = '';
        $output .= '
          <div class="table-responsive" >
           <table class="table table-striped">';

        $output .= '

                <tr>
                     <td width="10%"><label>Job Title</label></td>
                     <td width="90%">' .$data->job_title. '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Deadline</label></td>
                     <td width="90%">' . date("j-F-Y", strtotime($data->deadline)) . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Location</label></td>
                     <td width="90%">' . $data->location . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Department</label></td>
                     <td width="90%">' . $data->department . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Education</label></td>
                     <td width="90%">' . $data->education . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Description</label></td>
                     <td width="90%">' . $data->description . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Requirement</label></td>
                     <td width="90%">' . $data->requirement . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Experience</label></td>
                     <td width="90%">' . $data->experience . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Salary</label></td>
                     <td width="90%">' . $data->salary . '</td>
                </tr>
               ';

        $output .= "</table></div>";

        return $output;

    }

    //user Details
    public function UserDetails(Request $request)
    {

        $id = $request->id;
        $data = UserReg::find($id);

        $output = '';
        $output .= '
          <div class="table-responsive" >
           <table class="table table-striped">';

        $output .= '

                <tr>
                     <td width="10%"><label>Name</label></td>
                     <td width="90%">' . $data->name . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Contact</label></td>
                     <td width="90%">' . $data->contact . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Address</label></td>
                     <td width="90%">' . $data->address . '</td>
                </tr>
                 <tr>
                     <td width="10%"><label>Email</label></td>
                     <td width="90%">' . $data->email . '</td>
                </tr>
               ';

        $output .= "</table></div>";

        return $output;
    }


}
