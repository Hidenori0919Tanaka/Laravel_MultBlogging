{{-- @extends('layouts.app')

@section('content')

@include('partial.meta_static')
    <div class="container">
        @foreach ($blogs as $blog)
            <h2><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</h2>
            <p>{{ $blog->body}}</p>
        @endforeach  
    </div>
      
@endsection --}}

@extends('layouts.app')

@section('content')

@include('partial.meta_static')
    <div class="container">
        @foreach ($blogs as $blog)
            <h2><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</h2>
            <p>{{ $blog->body}}</p>
        @endforeach  
    </div>
      
@endsection
