<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::paginate(10);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::without('user')->findOrFail($id);
        return view('news.show', compact('news'));
    }
}
