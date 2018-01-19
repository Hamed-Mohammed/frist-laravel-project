<?php

namespace App\Http\Controllers;

use App\Category;
use App\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function welcome()
    {
        $category=Category::all();
        return view('hpage', compact('category'));
    }




    public function news(Category $category)
    {
        $categories = Category::all();
        $news = News::where('category_id', '=', $category->id)->paginate(3);
        return view('news', compact('news', 'category','categories'));
    }

     public function read( $id)
    {
        $news = News::find($id);
    $categories = Category::all();

        return view('post.post', compact('news','categories'));
    }



}
