<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\ChairmanMessage;
use App\Models\WelcomeMessage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PageController extends Controller
{

    public function aboutUs()
    {
        $about = About::first();
        return view('backend.pages.aboutUs', compact("about"));
    }


    public function aboutUsUpdate(Request $request, About $about)
    {

         $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'btn_text' => 'required',
            'image' => $about->exists ? 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048' : 'required|image',
        ]);


        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $about->title = $request->title;
        $about->description = $request->description;
        $about->link = $request->link;
        $about->btn_text = $request->btn_text;      
    
        if ($request->hasFile('image')) {
            $old = 'about/' . $about->image;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $imageName = uniqid() . '-' . Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('about', $imageName, 'public');
            $about->image = $imageName;
        }

        $about->editedby_id = Auth::id();
        $about->save();

        toast('About data updated successfully', 'success');
        return back();
    }


    public function chairmanMessage()
    {
        $chairman = ChairmanMessage::first();
        return view('backend.pages.chairman', compact('chairman'));
    }


  

    public function chairmanMessageUpdate(Request $request, ChairmanMessage $chairman)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'link' => 'required',
            'btn_text' => 'required',
            'contact_number' => 'required',
            'education' => 'required',
            'designation' => 'required',
            'organization' => 'required',
            'image' => $chairman->exists ? 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048' : 'required|image',
        ]);

        

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $chairman->name = $request->name;
        $chairman->description = $request->description;
        $chairman->link = $request->link;
        $chairman->btn_text = $request->btn_text;
        $chairman->contact_number = $request->contact_number;
        $chairman->education = $request->education;
        $chairman->designation = $request->designation;
        $chairman->organization = $request->organization;

        if ($request->hasFile('image')) {
            $old = 'chairman/' . $chairman->image;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $imageName = uniqid() . '-' . Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('chairman', $imageName, 'public');
            $chairman->image = $imageName;
        }


        $chairman->editedby_id = Auth::id();
        $chairman->save();

        toast('Chairman data updated successfully', 'success');
        return back();
    }


    public function welcomeMessage()
    {
        $welcome = WelcomeMessage::first();
        return view('backend.pages.welcome', compact("welcome"));
    }


    public function welcomeMessageUpdate(Request $request, WelcomeMessage $welcome)
    {

         $validation = Validator::make($request->all(), [
            'title' => 'required',
            'description' => 'required',
            'link' => 'required',
            'btn_text' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);


        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $welcome->title = $request->title;
        $welcome->description = $request->description;
        $welcome->link = $request->link;
        $welcome->btn_text = $request->btn_text;      
    
        if ($request->hasFile('image')) {
            $old = 'welcome/' . $welcome->image;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $imageName = uniqid() . '-' . Str::slug($request->name) . '.' . $request->image->getClientOriginalExtension();
            $request->image->storeAs('welcome', $imageName, 'public');
            $welcome->image = $imageName;
        }

        $welcome->editedby_id = Auth::id();
        $welcome->save();

        toast('Welcome message data updated successfully', 'success');
        return back();
    }

}
