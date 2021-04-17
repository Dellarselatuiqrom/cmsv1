<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function articles($id){
        echo "Articles Page With ID ".$id;
    }
    public function index(){
    $articles = Article::all();
    return view('articles.index', ['articles' => $articles]);
    }
    public function store(Request $request)
    {
    if ($request->file('image')){
        $image_name = $request->file('image')->store('images', 'public');
    }

    Article::create([
        'title' => $request->title,
        'content' => $request->content,
        'featured_image' => $image_name,
    ]);
    return redirect()->route('articles.index')
        ->with('success', 'Articles Successfully Added');
    }
    public function create(Request $request)
    {
        return view('articles.create');
    }
}
