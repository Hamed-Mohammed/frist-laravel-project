<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\News;

use App\User;

use File;

use Validator;

use Auth;


class NewsController extends Controller
{
    public function index()
    {
        $news = News::latest()->paginate(10);
        return view('post.all', compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('post.create', compact('categories'));
    }

    public function save(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'post' => 'required',
            'image' => 'required',



        ]);
        if ($validator->fails())
            return back()->withErrors($validator->errors());

        $post = new News();
        $post->title = $request->title;
        $post->post = $request->post;
        $post->user_id = Auth::id();
        $post->slide = $request->slide;
        $post->category_id = $request->categories;

        if ($request->has('image')) {
            $filename = str_random(10) . '.png';
            $request->file('image')->move(public_path('uploaded_images'), $filename);
        } else {
            $filename = 'no_avatar.jpg';
        }
        $post->image = $filename;
        $post->save();

        return redirect('/news');
    }


    public function delete(News $news)
    {
        return view('post.delete', compact('news'));
    }
    public function deletePost($id)
    {
        $news = News::find($id);
        $filename = public_path() . '/uploaded_images/' . $news->image;
        File::Delete($filename);
        $news->delete();
        return redirect('/news');
    }


    public function edit(News $news)
    {
        return view('post.edit', compact('news'));

    }

    public function editPost(Request $request, News $news)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'post' => 'required',
            //'image'=>'mimes:jpeg,bmp,png'
        ]);
        if ($validator->fails())
            return back()->withErrors($validator->errors());

        $news->title = $request->title;
        $news->post = $request->post;

        if ($request->hasFile('image')) {
            $deleteFilename = public_path() . '/uploaded_images/' . $news->image;
            File::Delete($deleteFilename);
            $filename = str_random(20) . '.png';
            $request->file('image')->move(public_path('uploaded_images'), $filename);
            $news->image = $filename;
        }

        $news->update();

        return redirect('/news');
    }
}
