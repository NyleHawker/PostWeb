@extends('layouts.app')

@section('content')
    
    <a href="/posts" class="btn btn-secondary text-white">Return To All Posts</a><br><br>

    <h1>{{$post->title}}</h1>

    <p>{{$post->body}}</p>

    <br>

    <!-- check access controls -->
    <!-- guest access controls -->
    @if (!Auth::guest())
        <!-- author access controls -->
        @if (Auth::user()->id == $post->user_id)
            <a href="/posts/{{$post->id}}/edit" class="btn btn-warning">Edit Post</a>

            <br>
            <br>

            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!! Form::close() !!}

            <br>
            <br>
        @endif
    @endif

    <small>Author: {{$post->user->name}}</small><br>
    <small>Posted: {{$post->created_at->diffForHumans()}}</small>

@endsection