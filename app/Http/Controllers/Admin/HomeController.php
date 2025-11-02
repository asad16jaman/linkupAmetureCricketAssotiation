<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    //


    public function index()
    {
        $home = Home::first();
        return view("admin.home-data", compact("home"));
    }

    // |regex:/^01[3-9][0-9]{8}$/
    public function create(Request $request)
    {
        $validationRules = [
            'impact' => 'required',
            'title' => 'required',
            'advertis_title' => "nullable|string"
        ];
        if ($request->hasFile('img')) {
            $validationRules['img'] = [
                'required',
                'image',
                'mimes:jpeg,jpg,png,gif,webp,svg',
            ];
        }
        $request->validate($validationRules);
        $home = Home::first();
        $updateData = $request->only([
            'impact',
            'title',
            'total_crickter',
            'advertis_title'
        ]);
        try {
            if ($home) {
                if ($request->hasFile('img') && $home->img != null) {
                    Storage::delete($home->img);
                }
                if ($request->hasFile('img')) {
                    $path = $request->file('img')->store('impact');
                    $updateData['img'] = $path;
                }
                Home::where('id', '=', $home->id)->update($updateData);
            } else {
                if ($request->hasFile('img')) {
                    $path = $request->file('img')->store('impact');
                    $updateData['img'] = $path;
                }
                Home::create($updateData);
            }
            return back()->with('success', 'Successfully stored Impact  Data');

        } catch (\Exception $e) {
            Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }
    }



}
