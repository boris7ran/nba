@extends('layouts.master')

@section('title', 'News {{ $news->title }}')

@section('content')

    <h2>{{ $news->title }}</h2>

    <p>{{ $news->content }}</p>

    
    <p>{{ $news->user->name }}</p>

    <p>{{ $news->user->email }}</p>

    @foreach ($news->teams as $team)
        <p><a href="/news/team/{{ $team->name }}">{{ $team->name }}</a></p>
    @endforeach

@endsection