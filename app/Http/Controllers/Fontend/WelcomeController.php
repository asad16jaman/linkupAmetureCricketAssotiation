<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\TeamMember;

class WelcomeController extends Controller
{
    public function welcome()
    {  
      $sliders = Slider::whereActive(true)->latest()->get();
      $members = TeamMember::whereActive(true)->latest()->get();
      
      return view('frontend.welcome.home',compact("sliders", "members"));
    }

    public function blogs()
    {  
       return view('frontend.welcome.blogs');
    }

    public function contactus()
    {
      return view("frontend.welcome.contactus");
    }


    public function aboutus()
    {
      return view("frontend.welcome.aboutus");
    }


    public function messageDetails()
    {
      return view("frontend.welcome.messageDetails");
    }

    public function welocmeNote()
    {
      return view("frontend.welcome.welocmeNote");
    }

    public function teamMembers()
    {
      return view("frontend.welcome.teamMembers");
    }

    public function photoGalleries()
    {
      return view("frontend.welcome.photoGalleries");
    }

    public function videoGalleries()
    {
      return view("frontend.welcome.videoGalleries");
    }


}
