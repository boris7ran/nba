@extends('layouts.master')

@section('title', 'Team')

@section('content')
    <h2>
        {{ $team->name }}
    </h2>

    <p>
        {{ $team->email }}
    </p>

    <p>
        {{ $team->adress}}
    </p>

    <p>
        {{ $team->city}}
    </p>


    @if(count($team->players))
        <h4> Players </h4>

        <ul class="list-group">
            @foreach ($team->players as $player)            
            <li class="list-group-item"> 
                <p><a href="/players/ {{ $player->id}}">{{ $player->first_name }} {{ $player->last_name}}</a></p>
            </li>
            @endforeach
        </ul>
    @endif

    @if(count($team->comments))
        <h4> Comments </h4>
        <ul class="list-group">
            @foreach ($team->comments as $comment)            
            <li class="list-group-item">
                <p> {{ $comment->user->name }} </p>
                <p> {{ $comment->content }}</p>
            </li>
            @endforeach
        </ul>
    @endif

    <form method="POST" action="{{ route('comments-team', ['team_id' => $team->id]) }}">
        @csrf

        <div class="form-group">
            <label for="content"> Content </label>
            <textarea class="form-control" id="content" name="content"></textarea>
        </div>
        

        <div class="form-group">
            <button type="submit">Submit</button>

        </div>

    </form>

@endsection