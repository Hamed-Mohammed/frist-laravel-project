<?php

namespace App\Http\Controllers;
use App\Category;

use Illuminate\Http\Request;
use File;
use Validator;
use Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('category.all', compact('categories'));
    }

    public function save(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',

        ]);
        if ($validator->fails())
            return back()->withErrors($validator->errors());
        $category = new Category();
        $category->name = $request->name;
        if ($request->has('image')) {
            $filename = str_random(10) . '.png';
            $request->file('image')->move(public_path('imgecategory'), $filename);
        } else {
            $filename = 'no_avatar.jpg';
        }
        $category->image = $filename;
        $category->save();

        return redirect('/category');
    }

    public function deletecat(Category $categories)
    {
        return view('category.deletecatg', compact('categories'));
    }
    public function deletecatPost($id)
    {
        $categories = Category::find($id);
        $filename = public_path() . '/imgecategory/' . $categories->image;
        File::Delete($filename);
        $categories->delete();
        return redirect('/category');
    }





    public function updatecat(Category $categories)
    {
        return view('category.updatecat', compact('categories'));

    }

    public function updatecatPost(Request $request, Category $categories)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            //'image'=>'mimes:jpeg,bmp,png'
        ]);
        if ($validator->fails())
            return back()->withErrors($validator->errors());

        $categories->name = $request->name ;


       if ($request->hasFile('image')) {
            $deleteFilename = public_path() . '/imgecategory/' . $categories->image;
            File::Delete($deleteFilename);
            $filename = str_random(20) . '.png';
            $request->file('image')->move(public_path('imgecategory'), $filename);
           $categories->image = $filename;
        }

        $categories->update();

        return redirect('/category');
    }


}
