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
@endsection