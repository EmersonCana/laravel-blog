@extends('layouts.internal-layout')

@section('body')
<div class="grid grid-cols-1 md:grid-cols-4 gap-4 mt-5">
    @foreach($blogs as $blog)
        <div class="card lg:card-side bg-base-100 shadow-xl">
            <figure><img src="{{$blog->thumbnail_url}}" alt="Album"/></figure>
            <div class="card-body">
                <h2 class="card-title">{{$blog->title}}</h2>
                <p>{{$blog->body}}</p>
                <div class="card-actions justify-end">
                <button class="btn btn-primary">Read</button>
                </div>
            </div>
        </div>
    @endforeach
</div>
    
@endsection