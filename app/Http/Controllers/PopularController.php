<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PopularController extends Controller
{
    //
    public function index(){
        $articles = Article::where('is_popular', true)
                           ->orderBy('date', 'desc')
                           ->paginate(3);

        return view('menu.popular', compact('articles'));
    }
}
