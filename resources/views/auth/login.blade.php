@extends('layouts.master')

@section('title', 'Login')

@section('content')

    <h2 class="blog-post-title">Login</h2>

    <form method="POST" action="{{route('store-login')}}">
        @csrf

        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-group" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-group" id="password" name="password">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Login</button>
        </div>
    </form>

@endsection