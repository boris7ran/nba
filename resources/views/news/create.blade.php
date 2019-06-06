@extends('layouts.master')

@section('title')
    Create News
@endsection

@section('content')
    <h2 class='blog-post-title'>Create News</h2>
    <form method="POST" action="{{ route('store-news') }}">
        @csrf

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" class="form-control" id="content" name="content">
        </div>

        <div class="form-group">
            <label for="teams[]">Teams</label>
            <ul class="list-group-item">
                @foreach ($teams as $team)
                    <input type="checkbox" name="teams[]" value="{{ $team->id }}"> {{ $team->name }} <br/>
                @endforeach
            </ul>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit Post</button>
        </div>
        
    </form>
@endsection