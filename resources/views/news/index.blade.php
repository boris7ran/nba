@extends('layouts.master')

@section('title', 'NBA News')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-sm-3 offset-sm-1 blog-sidebar">
                @include('partials.sidebar')
            </div>
        </div>
    </div>


    <ul class="list-group">
        @foreach ($news as $new)
            <li class="list-group-item">
                <a href="/news/{{ $new->id }}">{{ $new->title}}</a>
            </li>
        @endforeach
    </ul>

   
        

    <nav class="blog-pagination">
        <a 
        class="btn btn-outline-{{ $news->currentPage() === 1 ? 'disabled' : 'primary'}}" 
        href="{{ $news->previousPageUrl() }}"
        >
            Prevous
        </a>
    
        Page {{ $news->currentPage() }} of {{ $news->lastPage() }}
    
        <a 
        class="btn btn-outline-{{ $news->hasMorePages() ? 'primary' : 'disabled'}}" 
        href="{{ $news->nextPageUrl() }}"
        >
            Next
        </a> 
    </nav>

 


    
@endsection