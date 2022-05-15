@extends('layouts.app')

@section('content')
    
    <h1>Edit Your Post..</h1>

    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'PUT']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title..']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', $post->body, ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Say something..']) }}
        </div>
        <br>
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection