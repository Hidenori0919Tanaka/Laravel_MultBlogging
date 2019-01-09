{{-- @extends('layouts.app')

@section('content')

@include('partial.meta_dynamic')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">

                <div class="col-md-12">
                    @if($blog->feature_image)
                        <img src="/images/featured_image/{{ $blog->featured_image ? $blog-> featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}" class="img-responsive featured_image"><br/>
                    @endif
                </div>

                <div class="col-md-12">
                    <h1>{{ $blog->title }}</h1>
                </div>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm pull-left"> Edit </a>
            
                        <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger btn-sm pull-left">Delete</button>
                            {{ csrf_field() }}
                        </form>            
                    </div>
                </div>
                    
                    
                <div class="col-md-12">
                    <h1>{{ $blog->body }}</h1>
                    <hr>
                    <strong>Categories:</strong>
                    @foreach ($blog->category as $category)
                        <span><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></span>
                    @endforeach
                </div>
            </div>
        </article>
    </div>    
@endsection --}}

@extends('layouts.app')

@section('content')

@include('partial.meta_dynamic')

    <div class="container-fluid">
        <article>
            <div class="jumbotron">

                <div class="col-md-12">
                    @if($blog->feature_image)
                        <img src="/images/featured_image/{{ $blog->featured_image ? $blog-> featured_image : '' }}" alt="{{ str_limit($blog->title, 50) }}" class="img-responsive featured_image"><br/>
                    @endif
                </div>

                <div class="col-md-12">
                    <h1>{{ $blog->title }}</h1>
                </div>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-sm pull-left"> Edit </a>
            
                        <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger btn-sm pull-left">Delete</button>
                            {{ csrf_field() }}
                        </form>            
                    </div>
                </div>
                    
                    
                <div class="col-md-12">
                    <h1>{{ $blog->body }}</h1>
                    <hr>
                    <strong>Categories:</strong>
                    @foreach ($blog->category as $category)
                        <span><a href="{{ route('categories.show', $category->slug) }}">{{ $category->name }}</a></span>
                    @endforeach
                </div>
            </div>
        </article>
    </div>    
@endsection
