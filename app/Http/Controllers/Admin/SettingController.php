<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WebsiteSetting;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function setting(){
        $ws = WebsiteSetting::first();
        return view('backend.setting.edit', compact("ws"));
    }

    public function settingUpdate(Request $request, WebsiteSetting $ws){

        $validation = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

     
        $ws->title = $request->title;
        $ws->contact_mobile  = $request->contact_mobile;
        $ws->contact_mobile  = $request->contact_mobile;
        $ws->contact_address = $request->contact_address;
        $ws->facebook_url    = $request->facebook_url;
        $ws->twitter_url     = $request->twitter_url; 
        $ws->youtube_url     = $request->youtube_url; 
        $ws->linkdin_url     = $request->linkdin_url;
        $ws->google_url      = $request->google_url;
        $ws->google_map      = $request->google_map;
        $ws->instagram_url   = $request->instagram_url;
        $ws->office_hour     = $request->office_hour;
        $ws->copyright   = $request->copyright;

        if ($request->hasFile('logo')) {
            $old = 'ws/' . $ws->logo;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $file = $request->logo;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('ws/' . $imageName, File::get($file));
            $ws->logo = $imageName;
        }

     
        if ($request->hasFile('favicon')) {
            $old = 'ws/' . $ws->favicon;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $file = $request->favicon;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('ws/' . $imageName, File::get($file));
            $ws->favicon = $imageName;
        }

        if ($request->hasFile('footer_image')) {
            $old = 'ws/' . $ws->footer_image;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $file = $request->footer_image;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('ws/' . $imageName, File::get($file));
            $ws->footer_image = $imageName;
        }

        $ws->addedby_id = Auth::id();
        $ws->save();

        toast('Setting added successfully', 'success');
        return back();
    }
}
