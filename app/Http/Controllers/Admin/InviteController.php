<?php

namespace App\Http\Controllers\Admin;

use App\Models\Invite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class InviteController extends Controller
{
    //
    public function index(){
        $heading = "Invite Cart Message Create";
        $ch= Invite::first();
        return view("admin.authmsg", compact(['ch','heading']));
    }

    public function store(Request $request){
        $request->validate([
            'speech' => 'nullable',
            'title' => 'required'
        ]);
        $data = $request->only(['speech','title']);
        $ch = Invite::first();
        if ($ch) {
            //user edit section is hare
            try{
                if ($request->hasFile('img')) {
                    //delete if user already have profile picture...
                    if ($ch->img != null) {
                        Storage::delete($ch->img);
                    }
                    $path = $request->file('img')->store('invite');
                    $data['img'] = $path;
                }
                Invite::where('id', '=', $ch->id)->update($data);
                // 
                return redirect()->route('admin.invite-message')->with("success", "Successfully Invite Cart Message");
            }catch(\Exception $e){
                \Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                return redirect()->route('error');
            }
        }
        try{
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('invite');
                $data['img'] = $path;
            }
            Invite::create($data);
            return back()->with("success", "Successfully added Invite Cart Message");
        }catch(\Exception $e){
            \Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }

    }
}
