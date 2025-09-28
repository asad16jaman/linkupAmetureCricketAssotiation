<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\TeamMember;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class TeamMemberController extends Controller
{
    public function teamMembersAll()
    {
        $teams = TeamMember::latest()->paginate(20);
        return view('backend.teamMembers.index', compact("teams"));
    }


    public function teamMemberCreate()
    {
        return view('backend.teamMembers.create');
    }

    public function teamMemberStore(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'name'   => 'required',
            'mobile' => 'required',
            'email'  => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $team = new TeamMember;
        $team->name = $request->name;
        $team->email = $request->email;
        $team->mobile = $request->mobile;
        $team->address = $request->address;
        $team->short_description = $request->short_description;
        $team->role = $request->role;
     
        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('teams/' . $imageName, File::get($file));
            $team->image = $imageName;
        }

        $team->addedby_id = Auth::id();
        $team->save();

        toast('Team Member added successfully', 'success');
        return back();
    }


    public function teamMemberEdit(TeamMember $team)
    {
        return view('backend.teamMembers.edit',compact('team'));
    }
    public function teamMemberUpdate(Request $request, TeamMember $team)
    {

        $validation = Validator::make($request->all(), [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'image' => 'nullable',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }
     

        $team->name = $request->name;
        $team->email = $request->email;
        $team->mobile = $request->mobile;
        $team->address = $request->address;
        $team->short_description = $request->short_description;
        $team->role = $request->role;
     
        if ($request->hasFile('image')) {
            $old = 'teams/' . $team->image;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $file = $request->image;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('teams/' . $imageName, File::get($file));
            $team->image = $imageName;
        }

        $team->editedby_id = Auth::id();
        $team->save();

        toast('Team Member updated successfully', 'success');
        return back();
    }

    public function teamMemberDelete(TeamMember $team)
    {
     
        $old = 'teams/' . $team->image;
        if (Storage::disk('public')->exists($old)) {
            Storage::disk('public')->delete($old);
        }
        $team->delete();
        toast('Team Member successfully deleted', 'success');
        return redirect()->back();
    }
}
