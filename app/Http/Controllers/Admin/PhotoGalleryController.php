<?php

namespace App\Http\Controllers\Admin;

use Exception;
use App\Models\PhotoGallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PhotoGalleryController extends Controller
{
    //
    public function index(Request $request, ?int $id = null){
        $editgallery = null;
        if ($id != null) {
            $editgallery = PhotoGallery::find($id);
        }
        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allgallery = PhotoGallery::where("title", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(10);
        } else {
            $allgallery = PhotoGallery::orderBy('id', 'desc')->simplePaginate(10);
        }
        return view('admin.photogallery', compact('allgallery', 'editgallery'));
    }

    public function store(Request $request, ?int $id = null)
    {
        if($id){
            $request->validate([
                'title' => 'required',
                'img' => "nullable|image|mimes:jpeg,jpg,png,gif,webp,svg"
            ]);

        }else{
            $request->validate([
                'title' => 'required',
                'img' => "required|image|mimes:jpeg,jpg,png,gif,webp,svg"
            ]);
        }
        

        $data = $request->only('title');
        if ($id != null) {
            try{
            //user edit section is hare
                $currentEditUser = PhotoGallery::findOrFail($id);
                if ($request->hasFile('img')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->img != null) {
                        Storage::delete($currentEditUser->img);
                    }
                    $path = $request->file('img')->store('photogallery');
                    $data['img'] = $path;
                }
                PhotoGallery::where('id', '=', $id)->update($data);            
                return redirect()->route('admin.photogallery',['page'=>request()->query('page'),'search'=>request()->query('search')])->with('success','Successfully Gallery Updated!');
            }catch(Exception $e){
                Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                return redirect()->route('error');
            }
        }else{
             try{
                if ($request->hasFile('img')) {
                    $path = $request->file('img')->store('photogallery');
                    $data['img'] = $path;
                }
                PhotoGallery::create($data);
                return back()->with("success", "Successfully Gallery Created!");
            }catch(Exception $e){
                Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
                return redirect()->route('error');
            }
        }

       

    }

    public function destory(int $id)
    {
        try{
        $data = PhotoGallery::findOrFail($id);
        if ($data ) {
            //unlink image from directory....
            Storage::delete($data->img);
            $data->delete();
        }
        return redirect()->route('admin.photogallery')->with('success', 'Successfully Gallery Deleted!');
        }catch(Exception $e){
            Log::error("this message is from : ".__CLASS__."Line is : ".__LINE__." messages is ".$e->getMessage());
            return redirect()->route('error');
        }
    }



}
