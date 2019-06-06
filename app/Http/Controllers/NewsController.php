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

    public function create()
    {
        $teams = Team::all();

        return view('news.create', compact('teams'));
    }

    public function store()
    {
        $this->validate(request(), News::STORE_RULES);
        $news = new News;

        $news->title = request('title');
        $news->content = request('content');
        $news->user_id = auth()->user()->id;

        $news->save();

        $news->teams()->attach(request('teams'));

        $request->session()->flash('status', 'Task was successful!');

        return redirect()->route('all-news');
        
    }

    public function teamNews($teamName)
    {
        $team = Team::without('players', 'comments')->where('name', $teamName)->first();
        $news = $team->news()->paginate(10);

        return view('news.index', compact('news'));
    }
}
