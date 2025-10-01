<?php

namespace App\Http\Controllers\Admin;

use App\Models\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventTypeController extends Controller
{
    //
    public function index(Request $request, ?int $id = null)
    {
        $edititem = null;
        if ($id != null) {
            $edititem = EventType::findOrFail($id);
        }
        $searchValue = $request->query("search", null);
        if ($searchValue != null) {
            $allitems = EventType::where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(10);
        } else {
            $allitems = EventType::orderBy('id', 'desc')->simplePaginate(10);
        }
        return view('admin.event_type', compact('allitems', 'edititem'));
    }

    public function store(Request $request, ?int $id = null)
    {
        $validationRules = [
            'name' => 'required'
        ];
        //    'dimensions:width=260,height=150'
        if ($request->hasFile('logo')) {
            $validationRules['logo'] = [
                'required',
                // 'image',
                'mimes:jpeg,jpg,png,gif,webp,svg,avif'
            ];
        }

        $request->validate($validationRules);
        $data = $request->only(['name']);
        if ($id != null) {
            //edit catagory
            $edititem = EventType::findOrFail($id);
            try {
                if ($request->hasFile('img')) {

                    //delete if user already have profile picture...
                    if ($edititem->img != null) {
                        Storage::delete($edititem->img);
                    }
                    $path = $request->file('img')->store('eventType');
                    $data['img'] = $path;
                }
                EventType::where('id', '=', $id)->update($data);
                return redirect()->route('admin.eventType', ['page' => $request->query('page'), 'search' => $request->query('search')])->with("success", "Successfully Event Type Updated!");
            } catch (\Exception $e) {
                \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
                return redirect()->route('error');
            }
        }
        try {
            if ($request->hasFile('img')) {
                $path = $request->file('img')->store('eventType');
                $data['img'] = $path;
            }
            
            EventType::create($data);
            return back()->with("success", "Successfully Event Type Created!");
        } catch (\Exception $e) {
            \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }
    }

    public function destroy(int $id)
    {
        $data = EventType::findOrFail($id);
        if ($data) {
            //unlink image from directory....
            try {
                if ($data->img && Storage::exists($data->img)) {
                    Storage::delete($data->img);
                }
                $data->delete();
            } catch (\Exception $e) {
                \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
                return redirect()->route('error');
            }
        }
        return redirect()->route('admin.eventType')->with('success', 'Successfully Event Type Deleted!');
    }
}
