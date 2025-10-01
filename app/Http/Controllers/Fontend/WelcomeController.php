<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Authmessage;
use App\Models\Client;
use App\Models\Contact;
use App\Models\Event;
use App\Models\EventType;
use App\Models\Management;
use App\Models\PhotoGallery;
use App\Models\VideoGallery;
use App\Models\WelcomeNode;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Log;

class WelcomeController extends Controller
{
    public function welcome()
    {  
      $sliders = Slider::latest()->get();
      // $members = TeamMember::whereActive(true)->latest()->get();
      $auth_message = Authmessage::first();
      $wellcomeNode = WelcomeNode::first();
      $players = Management::latest()->take(8)->get();
      $p_gallery = PhotoGallery::latest()->take(8)->get();
      $v_gallery = VideoGallery::latest()->take(8)->get();
      $clients = Client::latest()->get();
      $blogs = Event::with('eventType')->latest()->take(8)->get();
      // return response()->json($blogs);
      return view('frontend.welcome.home',compact("sliders", "players",'auth_message','wellcomeNode','p_gallery','v_gallery','clients','blogs'));
    }

    public function blogs( ?string $type = null)
    {  
      if($type){
        $event_type = EventType::where('name','=',$type)->first();
        $blogs = Event::with('eventType')->where('event_type_id',$event_type->id)->latest()->get();
      }else{
        $blogs = Event::with('eventType')->latest()->get();
      }
      
       return view('frontend.welcome.blogs',compact('blogs'));
    }

    public function blogsDetail($uid){

      $blog_type = EventType::latest()->get();
      $blog = Event::where('uid','=',$uid)->first();
      $regent_blogs = Event::with('eventType')->latest()->take(4)->get();
      return view('frontend.welcome.blogDetails',compact('blog_type','blog','regent_blogs'));

    }

    public function contactus()
    {
      return view("frontend.welcome.contactus");
    }

     public function saveContact(Request $request)
    {
      $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|max:20',
        'subject' => 'required',
        'message' => 'required|max:500'
      ]);
      $data = $request->only(['name','email','phone','subject','message']);
      try{
        Contact::create($data);
        return redirect()->back()->with('success',"Successfully Stored Your Message!");
      }catch(\Exception $e){
        Log::info("This Log Is From WelComeController Line No: ".__LINE__." And Message is : ".$e->getMessage());
        return redirect()->back()->with('error',"there Is Some Problem. Try Again Later!");
      }
      
     
    }


    public function aboutus()
    {
      $about = About::first();
      return view("frontend.welcome.aboutus",compact('about'));
    }


    public function messageDetails()
    {
      $auth_message = Authmessage::first();
      return view("frontend.welcome.messageDetails",compact('auth_message'));
    }

    public function welocmeNote()
    {
      return view("frontend.welcome.welocmeNote");
    }

    public function teamMembers()
    {
      $players = Management::latest()->get();
      return view("frontend.welcome.teamMembers",compact('players'));
    }

    public function photoGalleries()
    {
      $photogallery = PhotoGallery::latest()->get();
      return view("frontend.welcome.photoGalleries",compact('photogallery'));
    }

    public function videoGalleries()
    {
      $videogallery = VideoGallery::latest()->get();
      return view("frontend.welcome.videoGalleries",compact('videogallery'));
    }


}
