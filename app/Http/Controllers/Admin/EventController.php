<?php

namespace App\Http\Controllers\Admin;

use App\Models\Event;
use App\Models\EventType;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EventController extends Controller
{
    //

    public function index(?int $id = null)
    {
        $searchValue = request()->query("search", null);

        $editItem = null;
        if (!is_null($id)) {
            $editItem = Event::with('eventType')->findOrFail($id);
        }

        $eventTypes = EventType::all();

        if ($searchValue != null) {
            $allevents = Event::with('eventType')->where("name", "like", "%" . $searchValue . "%")->orderBy('id', 'desc')->simplePaginate(3)->appends(request()->only('search'));
        } else {
            $allevents = Event::with('eventType')->orderBy('id', 'desc')->simplePaginate(3)->appends(request()->only('search'));
        }

        // return response()->json($products);

        return view('admin.event', compact(['allevents', 'eventTypes', 'editItem']));
    }
    // generating qr code of a product

    public function store(Request $request, ?int $id = null)
    {
        $validationRules = [
            'name' => 'required',
            'event_type_id' => 'required',
        ];
        if ($id == null || $request->hasFile('picture')) {
            $validationRules['picture'] = 'required|image|mimes:jpeg,jpg,png,gif,webp,svg';
        }
        $request->validate($validationRules);

        $data = $request->only(['name', 'description', 'event_type_id', 'event_date']);
        if (!is_null($id)) {
            $currentEditUser = Event::findOrFail($id);
            try {
                if ($request->hasFile('picture')) {
                    //delete if user already have profile picture...
                    if ($currentEditUser->picture != null) {
                        Storage::delete($currentEditUser->picture);
                    }
                    $path = $request->file('picture')->store('event');
                    $data['picture'] = $path;
                }
                Event::where('id', $id)->update($data);
                return redirect()->route('admin.event', ['page' => request()->query('page'), 'search' => request()->query('search')])->with('success', 'Successfully Event Updated!');
            } catch (\Exception $e) {
                \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
                return redirect()->route('error');
            }
        }

        try {
            if ($request->hasFile('picture')) {
                $path = $request->file('picture')->store('event');
                $data['picture'] = $path;
            }
            //creating product
            $product = Event::create($data);
            return redirect()->back()->with('success', 'Successfully Event Created!');

        } catch (\Exception $e) {
            \Log::error("this message is from : " . __CLASS__ . "Line is : " . __LINE__ . " messages is " . $e->getMessage());
            return redirect()->route('error');
        }
    }

   

    

    public function destroy(int $id)
    {
        try {

            $deleteItem = Event::findOrFail($id);

            // Delete main product picture
            if ($deleteItem->picture) {
                Storage::delete($deleteItem->picture);
            }

            

            $deleteItem->delete();
            return redirect()->route('admin.event')->with('success', 'Successfully Product Deleted!');
        } catch (\Exception $e) {
            \Log::error("this message is from: " . __CLASS__ . " Line: " . __LINE__ . " message: " . $e->getMessage());
            return redirect()->route('error');
        }
    }

    

    // public function allProductReview(int $id = null)
    // {

    //     if ($id) {
    //         $reviews = ProductReview::with('product')->where('product_id', $id)->latest()->simplePaginate(10);
    //     } else {
    //         $reviews = ProductReview::with('product')->latest()->simplePaginate(10);
    //     }

    //     return view('admin.productReview', compact('reviews'));
    // }

    // public function deleteProductReview($id)
    // {

    //     $review = ProductReview::findOrFail($id);
    //     try {
    //         $review->delete();
    //         return redirect()->route('admin.product.review')->with('success', "Successfully Deleted Review");
    //     } catch (Exception $e) {
    //         Log::error("this message is from: " . __CLASS__ . " Line: " . __LINE__ . " message: " . $e->getMessage());
    //         return redirect()->route('error');
    //     }
    // }



}
