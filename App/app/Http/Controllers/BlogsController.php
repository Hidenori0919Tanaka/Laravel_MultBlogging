<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Blog;

class BlogsController extends Controller
{
    //
        public function index(){
            $blogs = Blog::latest()->get();
            return view('blogs.index', compact('blogs'));
        }

        public function create(){
            $categories = Category::latest()->get();
            return view('blogs.create', compact('categories'));
        }

        public function store(Request $request){
            $input = $request->all();
            $blog = Blog::create($input);
            if($request->category_id){
                $blog->category()->sync($request->category_id);
            }
            // dd($request->body);
            // $blog = new Blog();
            // $blog->title = $request->title;
            // $blog->body = $request->body;
            // $blog->save();
            return redirect('/blogs');
        }

        public function show($id){
            $blog = Blog::findOrFail($id);
            return view('blogs.show', compact('blog'));
        }

        public function edit($id){
            $categories = Category::latest()->get();
            $blog = Blog::findOrFail($id);

            $bc = array();
            foreach($blog->$category as $c){
                $bc[] = $c->id - 1;
            }
            $filtered = array_expect($categories, $bc);

            return view('blogs.edit', ['blog' => $blog, 'categories' => $categories, 'filtered'=>$filtered]);
        }

        public function update(Request $request, $id){
            // dd($request);
            $input = $request->all();
            $blog = Blog::findOrFail($id);
            $blog->update($input);
            if($request->category_id){
                $blog->category()->sync($request->category_id);
            }
            return redirect('blogs');
        }

        public function delete($id){
            $blog = Blog::findOrFail($id);
            $blog->delete();
            return redirect('blogs');
        }

        public function trash(){
            $trashedBlogs = Blog::onlyTrashed()->get();
            return redirect('blog.trash', compact('trashedBlogs'));
        }

        public function restore($id){
            $restoredBlogs = Blog::onlyTrashed()->findOrFail($id);
            $restoredBlogs->restore($restoredBlogs);
            return redirect('blogs');
        }

        public function permanentDelete($id){
            $permanentDeleteBlog = Blog::onlyTrashed()->findOrFail($id);
            $permanentDeleteBlog->forceDelete($permanentDeleteBlog);
            return back;
        }
}
