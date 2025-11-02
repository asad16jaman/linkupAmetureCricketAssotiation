<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends Controller
{
    //
    public function index(Request $request, ?int $id = null)
    {
        $editfeedback = null;
        if ($id != null) {
            $editfeedback = Feedback::findOrFail($id);
        }
        $search = $request->input('search', null);
        if ($search) {
            $allfeedback = Feedback::where('name', 'like', '%' . $search . '%')->orderBy('id', 'desc')->get();
        } else {
            $allfeedback = Feedback::orderBy('id', 'desc')->get();
        }
        return view("admin.feedback", compact("editfeedback", "allfeedback"));
    }

    public function store(Request $request, ?int $id = null)
    {

        $validaterules = [
            "name" => "nullable|string",
            'note' => 'nullable|string'
        ];
        // dimensions:width=500,height=0"
        if ($id == null || $request->hasFile('photo')) {
            $validaterules['photo'] = "required|image|mimes:jpeg,jpg,png,gif,webp,svg";
        }
        ;
        $request->validate($validaterules);
        $data = $request->only(['name', 'note']);
        if ($id != null) {
            
            try {
                if ($request->hasFile('photo')) {
                    $currentEditUser = Feedback::findOrFail($id);
                    //delete if user already have profile picture...
                    if ($currentEditUser->photo != null && Storage::exists($currentEditUser->photo)) {
                        Storage::delete($currentEditUser->photo);
                    }
                    $path = $request->file('photo')->store('feedback');
                    $data['photo'] = $path;
                }
                Feedback::where('id', '=', $id)->update($data);
                return redirect()->route('admin.feedback', ['page' => $request->query('page'), 'search' => $request->query('search')])->with('success', "Successfully updated Feedback");

            } catch (\Exception $e) {
                \Log::error("Error is commin from SlideController Storage method");
                return redirect()->route('error');

            }
        }
        try{
            if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('feedback');
            $data['photo'] = $path;
        }
        Feedback::create($data);
        return back()->with("success", "Successfully created Feedback");
            
        }catch (\Exception $e) {
            \Log::error("Error is commin from SlideController Storage method");
            return redirect()->route('error');

        }
        
    }

    public function destroy(int $id)
    {
        try{
            $slider = Feedback::findOrFail($id);
            if ($slider->photo) {
                //unlink image from directory....
                Storage::delete($slider->photo);
            }
            $slider->delete();
            return redirect()->route('admin.feedback')->with('success', 'Successfully Deleted Feedback');
            
        } catch (\Exception $e) {
            \Log::error("Error is commin from SlideController Storage method");
            return redirect()->route('error');

        }
        
    }

}
