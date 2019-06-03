<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Team;
use App\Comment;

class CommentsController extends Controller
{
    public function store($teamId)
    {
        $comment = new Comment;

        $comment->content = request('content');
        $comment->user_id = auth()->user()->id;
        $comment->team_id = $teamId;
    
        $comment->save();
        
        return redirect()->route('single-team', ['id' => $teamId]);
    }
}
