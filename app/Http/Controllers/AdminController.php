<?php

namespace App\Http\Controllers;
use App\Models\Food;

use App\Models\User;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    public function user()
    {
        $data=user::all();

        return view("admin.users",compact("data"));
    }

    public function deleteuser($id)
    {
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function foodmenu()
    {

        return view("admin.foodmenu");
    }

    public function upload(Request $request)
    {
        $validatedData =  $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'description' => 'required|string',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();

            $path = $image->storeAs('foodimage', $imageName, 'public');

            $food = new Food;
            $food->image = $path;
            $food->title = $validatedData['title'];
            $food->price = $validatedData['price'];
            $food->description = $validatedData['description'];
            $food->save();

            return redirect()->back()->with('success', 'Food uploaded successfully.');
        } else {
            return redirect()->back()->with('error', 'No image uploaded.');
        }
}


}
