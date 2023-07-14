@extends('layouts.layout')

@section('body')
<div class="grid h-screen place-items-center">
    <div class="card w-2/3 bg-base-100 shadow-xl">
        <div class="card-body">
            <h2>Create Blog</h2>
            <form action="/blogs/create-post" method="post">
                @csrf
                <input type="text" placeholder="Title" class="input input-ghost w-full max-w-xs" name="title" id="title" />
                <input type="text" placeholder="Body" class="input input-ghost w-full max-w-xs" name="body" id="body" />
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>
@endsection