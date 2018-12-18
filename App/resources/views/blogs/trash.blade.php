@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="jumbotron">
        <h1>Trashed Blogs</h1>
    </div>
</div>

<div class="col-md-12">
    @foreach ($trashedBlogs as $blog)
        <h2><a href={{ route('blogs.show', $blog->id) }}>{{ $blog->title}}</h2>
        <p>{{ $blog->body}}</p>
        <div class="btn-group">
            <form action="{{ route('blogs.restore', $blog->id) }}" method="get">
                {{-- {{ method_field('delete') }} --}}
                <button type="submit" class="btn btn-success btn-xs pull-left">Restore</button>
                {{ csrf_field() }}
            </form>
            
            <form action="{{ route('blogs.permanent-delete', $blog->id) }}" method="post">
                {{ method_field('delete') }}
                <button type="submit" class="btn btn-danger btn-xs pull-left">permanent Delete</button>
                {{ csrf_field() }}
            </form>
        </div>
        
    @endforeach
       
</div>

@endsection
