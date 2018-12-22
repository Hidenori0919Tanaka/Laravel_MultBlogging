@extends('layouts.app')

@section('content')
    @foreach ($categories as $category)
        <h2><a href="{{ route(categories.show, $category->slug) }}">{{ $category->title}}</h2>
    @endforeach    
@endsection
