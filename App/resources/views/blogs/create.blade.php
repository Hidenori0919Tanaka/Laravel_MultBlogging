@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="jumbotron">
            <h1>create a new blog</h1>
        </div>

        <div class="col-md-12">
            <form action="{{ route('blogs.store') }}" method="post">
                <div class="form-group">
                    <label for="title">
                        <input type="text" name="title" class="form-control">
                    </label>
                </div>
                <div class="form-group">
                    <label for="body">
                        <textarea name="body" class="form-control"></textarea>
                    </label>
                </div>
                <div class="form-group form-check form-check-inline">
                    @foreach ($categories as $category)
                        <input type="checkbox" value="{{ $category->id }}" name="category_id[]" class="form-check-input">
                        <label for="" class="form-check-label btn-margin-right">{{ $category->name }}</label>
                    @endforeach
                </div>

                <div class="form-group">
                    <label for="featured-image">featured Image</label>
                    <input type="file" name="featured_image" class="form-control">
                </div>

                <button class="btn btn-primary" type="submit">Create a new blog</button>
                {{ csrf_field() }}
            </form>
        </div>
    </div>    
@endsection
