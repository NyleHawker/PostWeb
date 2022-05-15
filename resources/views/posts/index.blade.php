@extends('layouts.app')

@section('content')
    
    <h1>All Posts</h1>

    @if (count($posts) > 0)

        @foreach ($posts as $post)
            <div class="container bg-info p-3 mt-2 text-light">
                <h3><a href='/posts/{{$post->id}}' class="btn btn-warning">{{$post->title}}</a></h2>
                <small>Author: <span class="font-weight-bold">{{$post->user->name}}</span></small>
                <small>Posted: {{$post->created_at->diffForHumans()}}</small>
            </div>
        @endforeach

        <br>
        
        {{$posts->links()}}

    @else
        <h3>No Posts! Start Posting</h3>
    @endif

@endsection