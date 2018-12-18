@extends('layouts.app')

@section('content')
    @foreach ($blogs as $blog)
        <h2><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</h2>
        <p>{{ $blog->body}}</p>
    @endforeach    
@endsection
