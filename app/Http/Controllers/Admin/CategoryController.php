<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
     public function slidersAll()
    {
        $data['sliders'] = Category::latest()->paginate(20);
        return view('backend.categories.index', $data);
    }


    public function categoryStore(Request $request)
    {

        $validation = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $category = new Category;
        $category->title = $request->title;
        $category->addedby_id = Auth::id();
        $category->save();

        toast('Category added successfully', 'success');
        return back();
    }

  
  
    public function categoryUpdate(Request $request, Category $category)
    {

        $validation = Validator::make($request->all(), [
            'title' => 'required',
        ]);

        if ($validation->fails()) {
            toast('Something Went Wrong!', 'error');
            return back()->withErrors($validation)->withInput();
        }

        $category->title = $request->title;
        $category->active = $request->active ? 1 : 0;
        $category->editedby_id = Auth::id();
        $category->save();

        toast('Category successfully updated', 'success');
        return back();
    }

   
    public function categoryDelete(Category $category)
    {
     
        $category->delete();
        toast('Category successfully deleted', 'success');
        return redirect()->back();
    }

}
