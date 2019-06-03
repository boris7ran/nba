@extends('layouts.master')

@section('title', 'Register New User')

@section('content')

    <h2 class="blog-post-title">Register New User</h2>


    <form method="POST" action="{{route('store-register')}}">
        @csrf

        <div class="form-group">
            <label for="name">Username</label>
            <input type="text" class="form-group" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-group" id="email" name="email">
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <input type="text" class="form-group" id="password" name="password">
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirm Password</label>
            <input type="text" class="form-group" id="password_confirmation" name="password_confirmation">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Register</button>
        </div>

    </form>

@endsection