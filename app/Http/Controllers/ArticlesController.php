<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function index()
    {
        $articles = Article::latest()->get();

        return view('articles.index', ['articles' => $articles]);
    }
    
    public function show(Article $article)
    {
        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $validatedAttributes = request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]);

        // This requires explicit permission on Article model
        // Check update method to see inlined version of this
        Article::create($validatedAttributes);

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit',[
            'article' => $article
        ]);
    }

    public function update(Article $article)
    {
        $article->update(request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required'
        ]));

        return redirect('/articles/'.$article->id);
    }
}