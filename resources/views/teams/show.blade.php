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

@endsection