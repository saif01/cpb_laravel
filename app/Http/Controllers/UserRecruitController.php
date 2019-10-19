<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailForUser;

use Session;
use App\VisitorInfo\UserInfo;
use App\Recruit;
use App\UserReg;
use App\UserLoginLog;
use App\Apply;

use DB;


class UserRecruitController extends Controller
{
    //Function assecc from blade file
    public static function Apply($user_id, $recruit_id)
    {
        return Apply::where(['user_id'=> $user_id, 'recruit_id'=>$recruit_id ])->first();
    }

    public function Index()
    {
        $recruit= Recruit::where('status','1')->get();
        return view('user.recruit.index')->with('recruit', $recruit);
    }

    //Register form Show
    public function RegisterFormShow(){
        return view('user.recruit.register');
    }

    //insert
    public function Register(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'required | email | unique:user_regs',
            'contact' => 'required | min:11',
            'image' => 'required | max:300', // file only jgp and size Not more than 500 kb
            'document' => 'required | max:1000', // file only jgp and size Not more than 500 kb
        ]);
        $data = new UserReg();
        $token = str_random(20);
        $userMail= $request->email;
        $password = str_random(6);

            $mailData = array(
            'name'      =>  $request->name,
            'email'      =>  $userMail,
            'password'   =>   $password,
            'link'   =>    route('user.verify', [ $token, $userMail ]),
            );
        Mail::to($userMail)->send(new SendMailForUser($mailData));

        //For Image
        $image = $request->file('image');
        if (!empty($image)) {
            $image_name = str_random(5);
            $ext = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $ext;
            $upload_path = 'public/images/user/';
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
            $doc_upload_path = 'public/images/user/';
            $doc_url = $doc_upload_path . $doc_full_name;
            $success = $document->move($doc_upload_path, $doc_full_name);
            if ($success) {
                $data->document = $doc_url;
            }
        }
        $data->name = request('name');
        $data->contact = request('contact');
        $data->address = request('address');
        $data->email = request('email');
        $data->address = request('address');
        $data->password = $password;
        $data->token = $token;
        $data->status = '1';
        $successData = $data->save();
        //echo $data;




        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Data Inserted',
                'alert-type' => 'success',
                'extraMsg'=> 'Please Check Your E-mail'
            );
            //return Redirect()->route('event.all')->with($notification);
            return Redirect()->back()->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }
    }


    //user email verify
    public function UserVerify($token, $email)
    {
        $success= UserReg::where('email', $email)
                            ->where('token', $token)
                            ->first();
        $success->verify = 1;
        $success->save();

        if($success){
            $notification = array(
                'messege' => 'Successfully E-mail Verified',
                'alert-type' => 'success',
            );
            return Redirect()->route('user.login.form')->with($notification);
        }else{
            $notification = array(
                'messege' => 'Somthing Going Wrong, Try Again Later',
                'alert-type' => 'error',
            );
            return Redirect()->route('user.login.form')->with($notification);
        }
    }

    //Login Form Show
    public function LoginForm(){
        return view('user.recruit.login');
    }

    //User Login
    public function loginAction(Request $request)
    {

        $email  = $request->input('email');
        $password = $request->input('password');

        //for user details class object
        $userDetails = new UserInfo();
        //store Login log
        $loginLog = new UserLoginLog();
        $loginLog->login_id = $email;
        $loginLog->ip = $userDetails->get_ip();
        $loginLog->os = $userDetails->get_os();
        $loginLog->device = $userDetails->get_device();
        $loginLog->browser = $userDetails->get_browser();
        $loginLog->city = $userDetails->city();
        $loginLog->country = $userDetails->country();

        //fetch data by id password
        $data = UserReg::where(['email' => $email, 'password' => $password ])->first();

        if ($data) {
            $status = $data->status;
            $verify = $data->verify;

            if($verify != 1){
                $notification = array(
                    'messege' => 'Your E-mail Is Not Verified',
                    'alert-type' => 'warning',
                    'extraMsg' => 'Please Check Your E-mail'
                );
                //return Redirect()->route('event.all')->with($notification);
                return Redirect()->back()->with($notification);
            }

            elseif ($status == 1) {

                //Put User data in session
                Session::put('user-email', $email);
                Session::put('user-id', $data->id);
                Session::put('user-name', $data->name);
                Session::put('user-contact', $data->contact);
                Session::put('user-image', $data->image);
                Session::put('user-email', $data->email);
                Session::put('user-address', $data->address);
                Session::put('user-document', $data->document);
                Session::put('user-status', $data->status);

                //correct loging status
                $loginLog->status = 1;
                $loginLogSt = $loginLog->save();

                if ($loginLogSt) {
                    $notification = array(
                        'messege' => 'Successfully LogedIn',
                        'alert-type' => 'success',
                    );
                    return redirect()->route('recruit')->with($notification);
                } else {
                    $notification = array(
                        'messege' => 'Somthing Going Wrong',
                        'alert-type' => 'error',
                    );
                    return Redirect()->back()->with($notification);
                }
            }

            else{
                //error login status
                $loginLog->status = 0;
                $loginLogSt = $loginLog->save();
                $notification = array(
                    'messege' => 'Your Id Was Bolcked',
                    'alert-type' => 'warning',
                    'extraMsg' => 'Your Id Was Bolcked'
                );
                return Redirect()->back()->with($notification);
            }
        } else {
            //error login status
            $loginLog->status = 0;
            $loginLogSt = $loginLog->save();
            $notification = array(
                'messege' => 'Wrong Login Details',
                'alert-type' => 'error',
                'extraMsg' => 'E-mail Or Password Not Match'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //Logout function
    public function Logout()
    {
        //login id
        $loginId = Session::get('user-email');
        // find last loging log id
        $data = UserLoginLog::where('login_id', $loginId)
            ->orderBy('id', 'desc')->take(1)
            ->first();
        $id = $data->id;

        //make object and update logout time
        $loginLog = new UserLoginLog();
        $loginLog = UserLoginLog::find($id);
        //current time
        $loginLog->logout = date('Y-m-d H:i:s');
        $loginlog_success = $loginLog->save();

        if ($loginlog_success) {
            session()->flush();
            $notification = array(
                'messege' => 'Successfully LogedOut',
                'alert-type' => 'success',
            );
            return redirect()->route('recruit')->with($notification);
        } else {
            return "Somthing Going Wrong";
        }
    }


    //Password Change Form Show
    public function PassChange()
    {
        return view('user.recruit.change-pass');
    }


    //Password Change
    public function PassChangeAction(Request $request){
        $validateData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        //login id
        $id = Session::get('user-id');
        $old_password = request('old_password');

        $data= UserReg::where([ 'id'=> $id, 'password'=> $old_password ])->first();

        if(!empty($data)){

            $data->password = request('new_password');
            $successData = $data->save();

            if ($successData) {
                $notification = array(
                    'messege' => 'Successfully Password Changed',
                    'alert-type' => 'success',
                );
                return Redirect()->route('recruit')->with($notification);
            } else {
                $notification = array(
                    'messege' => 'Somthing Going Wrong',
                    'alert-type' => 'error'
                );
                return Redirect()->back()->with($notification);
            }

        }else{
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error',
                'extraMsg' => 'Old Password Not Match'
            );
            return Redirect()->back()->with($notification);
        }
    }

    //User Profile
    public function UserProfile(){

         //$applyData = Apply::orderBy('id','desc')->get();

        //  echo "<pre>";
        // print_r($applyData);

        $applyData=DB::table('applies')
                    ->join('recruits', 'recruits.id', '=', 'applies.recruit_id' )
                    ->get();

        return view('user.recruit.user-profile')->with('applyData', $applyData);
    }

    //Apply
    public function UserApply(Request $request){

        $data = new Apply();

        $data->user_id = Session::get('user-id');
        $data->recruit_id = request('recruit_id');
        $successData = $data->save();

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Applyed',
                'alert-type' => 'success',
            );
            return Redirect()->route('recruit')->with($notification);
        } else {
            $notification = array(
                'messege' => 'Somthing Going Wrong',
                'alert-type' => 'error'
            );
            return Redirect()->back()->with($notification);
        }


    }

}
