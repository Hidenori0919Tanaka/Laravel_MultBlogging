@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach ($blogs as $blog)
            <h2><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</h2>
            <p>{{ $blog->body}}</p>
        @endforeach  
    </div>
      
@endsection
