<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.blogs', compact(['blogs']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blogs.partials.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $blog = new Blog;
        $blog->title = $request->title;
        $blog->author_id = 1;
        $blog->body = $request->body;
        $blog->category = "random";
        $blog->thumbnail_url = "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI6m_Gq2huoTMtFpKRlVYVkWsg8zBrrGDTzHnKgeo9&s";
        if($blog->save()) {
            return redirect('/blogs');
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function apiBlogs() {
        return Blog::all();
    }
}
