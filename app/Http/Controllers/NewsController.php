<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;
use App\Team;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::without('teams')->paginate(10);

        return view('news.index', compact('news'));
    }

    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show', compact('news'));
    }

    public function teamNews($teamName)
    {
        $team = Team::without('players', 'comments')->where('name', $teamName)->first();
        $news = $team->news()->paginate(10);

        return view('news.index', compact('news'));
    }
}
