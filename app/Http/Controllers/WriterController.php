<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    //
    public function index()
    {

        $writers = Writer::all();
        return view('menu.writer', compact('writers'));

    }

    public function show($id) {

        $writer = Writer::findOrFail($id);
        $articles = $writer->articles()->orderBy('date', 'desc')->get();
        return view('menu.wdetail', compact('writer', 'articles'));
    }
}
