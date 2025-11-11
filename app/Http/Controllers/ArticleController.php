<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //

    public function show($id)
    {
        $articles = Article::with('writer', 'category')->findOrFail($id);
        return view('menu.info', compact('articles'));

    }

}
