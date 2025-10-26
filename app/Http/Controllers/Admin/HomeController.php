<?php

namespace App\Http\Controllers\Admin;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;

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
            'batsman' => 'required',
            'bowler' => 'required',
            'awart' => 'required',
            'trophies' => 'required',
            'total_crickter' => 'required'
            
        ];
        // if ($request->hasFile('logo')) {
        //     $validationRules['logo'] = [
        //         'required',
        //         'image',
        //         'mimes:jpeg,jpg,png,gif,webp,svg',
        //     ];
        // }
        $request->validate($validationRules);

        $home = Home::first();
        $updateData = $request->only([
           'impact',
            'batsman',
            'bowler',
            'awart',
            'trophies',
            'total_crickter'
        ]);
        try {
            if ($home) {

                // if ($request->hasFile('logo') && $company->logo != null) {
                //     Storage::delete($company->logo);
                // }

                // if ($request->hasFile('logo')) {
                //     $path = $request->file('logo')->store('company');
                //     $companyData['logo'] = $path;
                // }

                Home::where('id', '=', $home->id)->update($updateData);

            } else {
                // if ($request->hasFile('logo')) {
                //     $path = $request->file('logo')->store('company');
                //     $companyData['logo'] = $path;
                // }

                Home::create($updateData);
            }
            return back()->with('success', 'Successfully stored Home Page Data');

        } catch (\Exception $e) {
            Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }

    }


    
}
