@extends('layouts.master')

@section('title', 'Players')

@section('content')

    <h2>
        {{ $player->name }}
    </h2>

    <p>
        {{ $player->email }}
    </p>

    <p>
        <a href="/teams/ {{ $player->team->id}}"> {{ $player->team->name }} </a>
    </p>

@endsection