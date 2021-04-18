<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

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
    public function update(REquest $request, $id)
    {
        $article = Article::find($id);

        $article->title = $request->title;
        $article->content = $request->content;

        if ($article->featured_image && file_exists(storage_path('app/public/' . $article->featured_image))) {
            storage::delete('public/' . $article->featured_image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $article->featured_image = $image_name;

        $article->save();
        return redirect()->route('articles.index')
            ->with('success', 'Article Successfully Updated');
    }
    public function edit($id)
    {
        $article = Article::find($id);

        return view('articles.edit', ['article' => $article]);
    }
    public function print_pdf(){
        $articles = Article::all();
        $pdf = PDF::loadview('articles.articles_pdf', ['articles'=>$articles]);
        return $pdf->stream();
    }
}
