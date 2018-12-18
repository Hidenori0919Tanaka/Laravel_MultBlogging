@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <article>
            <div class="jumbotron">
                <div class="col-md-12">
                    <h1>{{ $blog->title }}</h1>
                </div>
                <div class="col-md-12">
                    <div class="btn-group">
                        <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-primary btn-xs pull-left"> Edit </a>
            
                        <form action="{{ route('blogs.delete', $blog->id) }}" method="post">
                            {{ method_field('delete') }}
                            <button type="submit" class="btn btn-danger btn-xs pull-left">Delete</button>
                            {{ csrf_field() }}
                        </form>            
                    </div>
                </div>
                    
                    
                <div class="col-md-12">
                    <h1>{{ $blog->body }}</h1>
                </div>
            </div>
        </article>
    </div>    
@endsection
