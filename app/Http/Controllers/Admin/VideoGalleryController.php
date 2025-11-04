<?php

namespace App\Http\Controllers\Admin;

use App\Models\VideoGallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class VideoGalleryController extends Controller
{
    //

    public function index(Request $request, ?int $id = null)
    {
        $editgallery = null;
        if ($id != null) {
            $editgallery = VideoGallery::find($id);
        }
        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allgallery = VideoGallery::where("title", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(3);
        } else {
            $allgallery = VideoGallery::orderBy('id', 'desc')->simplePaginate(3);
        }
        return view('admin.videogallery', compact('allgallery', 'editgallery'));
    }




    public function store(Request $request, ?int $id = null)
    {
        if ($id) {
            $request->validate([
                'video_url' => 'required',
                'duration' => 'required',
                'img' => "nullable|image|mimes:jpeg,jpg,png,gif,webp,svg"
            ]);

        } else {
            $request->validate([
                'video_url' => 'required',
                'duration' => 'required',
                'img' => "required|image|mimes:jpeg,jpg,png,gif,webp,svg"
            ]);
        }


        $data = $request->only(['video_url', 'duration']);
        if ($id != null) {
            try {
                //user edit section is hare
                $currentEditUser = VideoGallery::findOrFail($id);
                if ($request->hasFile('img')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->img != null) {
                        Storage::delete($currentEditUser->img);
                    }
                    $path = $request->file('img')->store('videogallery');
                    $data['img'] = $path;
                }
                VideoGallery::where('id', '=', $id)->update($data);
                return redirect()->route('admin.videogallery', ['id' => $id, 'page' => request()->query('page'), 'search' => request()->query('search')])->with('success', 'Successfully Gallery Updated!');
            } catch (\Exception $e) {
                \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
                return redirect()->route('error');
            }
        }

        try {
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('videogallery');
                $data['img'] = $path;
            }
            VideoGallery::create($data);
            return back()->with("success", "Successfully Gallery Created!");
        } catch (\Exception $e) {
            \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }

    }

    public function destory(int $id)
    {
        try {
            $data = VideoGallery::findOrFail($id);
            if ($data) {
                //unlink image from directory....
                Storage::delete($data->img);
                $data->delete();
            }
            return redirect()->route('admin.videogallery')->with('success', 'Successfully Gallery Deleted!');
        } catch (\Exception $e) {
            \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }
    }
}
