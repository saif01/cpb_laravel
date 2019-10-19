<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use App\VisitorInfo\UserInfo;

use App\Slider;
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
use App\Photo;
use App\SR;
use App\Community;
use App\News;
use App\Contact;
use App\VisitorMsg;
use App\Product;
use App\Recruit;
use App\VisitorLog;

class ForntEndController extends Controller
{
    //Function assecc from blade file
    public static function Porduct(){
        return Product::where('status','1')->get();
    }

    //Index
    public function Index(){

        //for user details class object
        $userDetails = new UserInfo();
        $Ip = $userDetails->get_ip();
        $Os = $userDetails->get_os();
        $Device = $userDetails->get_device();
        $Browser = $userDetails->get_browser();
        $City = $userDetails->city();
        $Country = $userDetails->country();
        $Count = 1;

        //find ip have or not in data base
        $visistorDatabase = VisitorLog::where('ip', '=', $Ip)
            ->whereDate('created_at', '=', date('Y-m-d'))
            ->orderBy('id', 'desc')
            ->take(1)
            ->first();
        if ($visistorDatabase) {
            $id =  $visistorDatabase->id;
            $count = $visistorDatabase->count;
            $count = $count + 1;
            $visitorData = VisitorLog::find($id);
            $visitorData->count = $count;
            $visitorData->save();
        } else {
            $visitorData = new VisitorLog();
            $visitorData->ip = $Ip;
            $visitorData->os = $Os;
            $visitorData->device = $Device;
            $visitorData->browser = $Browser;
            $visitorData->city = $City;
            $visitorData->country = $Country;
            $visitorData->count = $Count;
            $visitorData->save();
        }

        $slider = Slider::where('status', '1')
            ->orderBy('id', 'desc')
            ->take(5)
            ->get();

        $recruitData = Recruit::where('deadline', '>=',  date('Y-m-d'))
            ->orderBy('deadline', 'desc')
            ->select('deadline', 'job_title')
            ->take(2)
            ->get();

        $pressData = Press::where('status', '1')
            ->orderBy('id', 'desc')
            ->select('title', 'updated_at')
            ->take(2)
            ->get();

        $eventData = Event::where('status', '1')
            ->orderBy('id', 'desc')
            ->select('title', 'updated_at')
            ->take(2)
            ->get();

        $contactData = Contact::orderBy('id', 'desc')
            ->take(1)
            ->first();

        // echo "<pre>";
        // print_r($circular);

        return view('user.index')
            ->with('slider', $slider)
            ->with('recruitData', $recruitData)
            ->with('eventData', $eventData)
            ->with('contactData', $contactData)
            ->with('pressData', $pressData);
    }
    //History
    public function History()
    {
        $history = History::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.about.history')->with('history', $history);
    }
    //Mission
    public function Mission()
    {
        $mission = Mission::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.about.mission')->with('mission', $mission);
    }
    //Chairman Message
    public function ChairmanMessage()
    {
        $chairmanMsg = ChairmanMsg::where('status', '1')
            ->orderBy('id', 'desc')
            ->take(1)
            ->first();
        return view('user.about.chairman-message')->with('chairmanMsg', $chairmanMsg);
    }

    //President Message
    public function PresidentMessage()
    {
        $presidentMsg = PresidentMsg::where('status', '1')
            ->orderBy('id', 'desc')
            ->take(1)
            ->first();
        return view('user.about.president-message')->with('presidentMsg', $presidentMsg);
    }

    //Mission
    public function BusinessOperation()
    {
        $buOperation = BUoperation::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.about.business-operations')->with('buOperation', $buOperation);
    }

    //Corporate-Structure
    public function CorporateStructure()
    {
        $structure = Structure::where('status', '1')
            ->orderBy('id', 'desc')
            ->take(1)
            ->first();
        return view('user.about.corporate-structure')->with('structure', $structure);
    }

    //Corporate-Structure
    public function OurHeadquarters()
    {
        $headquarter = Headquarter::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.about.our-headquarter')->with('headquarter', $headquarter);
    }

    //Corporate-Structure
    public function AnimalWelfare()
    {
        return view('user.about.animal-welfare');
    }

    //Corporate-Structure
    public function PressRelease()
    {
        $press = Press::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.news.press-releases')->with('press', $press);
    }

    //Traing Development
    public function TraingDevelopment()
    {
        $trdev = Trdev::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.news.traing-development')->with('trdev', $trdev);
    }

    //Event
    public function Event()
    {
        $event = Event::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.news.event')->with('event', $event);
    }

    //Gallery
    public function Gallery()
    {
        $photo = Photo::orderBy('id', 'desc')
            ->paginate(15);
        return view('user.news.gallery')->with('photo', $photo);
    }

    //Social Response
    public function SocialResponse()
    {
        $socialResponse = SR::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.csr.social-res')->with('socialResponse', $socialResponse);
    }

    //Community
    public function Community()
    {
        $community = Community::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.csr.community')->with('community', $community);
    }

    //News
    public function News()
    {
        $news = News::where('status', '1')
            ->orderBy('id', 'desc')
            ->get();
        return view('user.csr.news')->with('news', $news);
    }

    //Contact
    public function Contact()
    {
        $contact = Contact::orderBy('id', 'desc')
            ->take(1)
            ->first();
        return view('user.contact')->with('contact', $contact);
    }

    //Mail Send
    function MailSend(Request $request)
    {
        $this->validate($request, [
            'email'    =>  'required|email',
            'message'  =>  'required'
        ]);

        $data = array(
            'name'      =>  $request->name,
            'contact'   => $request->contact,
            'email'      =>  $request->email,
            'message'   =>   $request->message
        );
        Mail::to('syful.cse.bd@gmail.com')->send(new SendMail($data));

        //Store Message in Database
        $data2 = new VisitorMsg();
        $data2->name = request('name');
        $data2->contact = request('contact');
        $data2->email = request('email');
        $data2->message = request('message');
        $successData = $data2->save();

        if ($successData) {
            $notification = array(
                'messege' => 'Successfully Message Send',
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


    //Product
    public function Product($name){

        $product = Product::where('name', $name)->first();
        //print_r($product) ;
        //echo $product->name;
        return view('user.product')->with('product', $product);
    }



}
