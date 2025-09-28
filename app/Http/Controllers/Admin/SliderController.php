<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class SliderController extends Controller
{
   
    public function slidersAll()
    {
        $data['sliders'] = Slider::latest()->paginate(20);
        return view('backend.sliders.index', $data);
    }


    public function sliderStore(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'title' => 'required',
            'image' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $slider = new Slider;
        $slider->title = $request->title;
        $slider->excerpt = $request->excerpt;

        if ($request->hasFile('image')) {
            $file = $request->image;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('sliders/' . $imageName, File::get($file));
            $slider->image = $imageName;
        }

        $slider->addedby_id = Auth::id();
        $slider->save();

        toast('Slider added successfully', 'success');
        return back();
    }

  
    public function sliderEdit(Slider $slider)
    {
        return view('admin.sliders.sliderEdit', compact('slider'));
    }

  
    public function sliderUpdate(Request $request, Slider $slider)
    {

        $validation = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $slider->title = $request->title;
        $slider->excerpt = $request->excerpt;
        $slider->active = $request->active ? 1 : 0;

        if ($request->hasFile('image')) {
            $old = 'sliders/' . $slider->image;
            if (Storage::disk('public')->exists($old)) {
                Storage::disk('public')->delete($old);
            }
            $file = $request->image;
            $imageName = rand(111, 555) . time() . "." . $file->getClientOriginalExtension();
            Storage::disk('public')->put('sliders/' . $imageName, File::get($file));
            $slider->image = $imageName;
        }

       

        $slider->editedby_id = Auth::id();
        $slider->save();

        toast('Slider successfully updated', 'success');
        return back();
    }

   
    public function sliderDelete(Slider $slider)
    {
     

        $old = 'sliders/' . $slider->image;
        if (Storage::disk('public')->exists($old)) {
            Storage::disk('public')->delete($old);
        }
        $slider->delete();
        toast('Slider successfully deleted', 'success');
        return redirect()->back();
    }

    

   
    
}
