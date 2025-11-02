<?php

namespace App\Http\Controllers\Admin;

use App\Models\Bylaw;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class LawController extends Controller
{
    //

    
    public function index($id = null)
    {
        if($id){
            $editItem = Bylaw::find($id);
        }else{
            $editItem = null;
        }
        $allData = ByLaw::latest()->get();
        return view("admin.lawfile", compact("editItem",'allData'));
    }

    // |regex:/^01[3-9][0-9]{8}$/
    public function store(Request $request,$id = null)
    {
        $validationRules = [
            'navName' => 'required',
        ];
        if ($request->hasFile('file')) {
            $validationRules['file'] = [
                'required',
                'file',
                'mimes:pdf'
            ];
        }
        $request->validate($validationRules);
        $updateData = $request->only([
            'navName'
        ]);
        try {
            if ($id) {
                $editItem = Bylaw::findOrFail($id);
                 if ($request->hasFile('file') && $editItem->file != null) {
                    Storage::delete($editItem->file);
                }
                if ($request->hasFile('file')) {
                    $path = $request->file('file')->store('bylaw');
                    $updateData['file'] = $path;
                }
                Bylaw::where('id', '=', $editItem->id)->update($updateData);
                return redirect()->route('admin.byLawFile')->with('success', 'Successfully Updated  By-Law File');
            } else {
                if ($request->hasFile('file')) {
                    $path = $request->file('file')->store('bylaw');
                    $updateData['file'] = $path;
                }
                Bylaw::create($updateData);
            }
            return back()->with('success', 'Successfully stored  By-Law File');

        } catch (\Exception $e) {
            \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }
    }


    public function destroy(int $id)
    {

        try {
            $data = Bylaw::find($id);
            if ($data) {
                //unlink image from directory....
                if($data->file){
                    Storage::delete($data->file);
                }
                $data->delete();
            }
            return redirect()->route('admin.byLawFile')->with('success', 'Successfully By-Law File Deleted!');
        } catch (\Exception $e) {
            \Log::error("Error is commin from LawController destroy  method");
            return redirect()->route('error');
        }


    }










}
