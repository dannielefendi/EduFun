<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //

    public function show($id)
    {
        $categories = Category::findOrFail($id);
        $articles = $categories->articles()->orderBy('date', 'desc')->get();
        return view('menu.detail', compact('categories', 'articles'));
    }

}
