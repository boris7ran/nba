@extends('layouts.master')

@section('title', 'NBA Teams')

@section('content')

    <ul class="list-group">
        @foreach ($teams as $team)
            <li class="list-group-item">
                <a href="/teams/{{ $team->id }}">{{ $team->name}}</a>
            </li>
        @endforeach
    </ul>
    
@endsection