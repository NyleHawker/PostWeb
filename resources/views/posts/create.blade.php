@extends('layouts.app')

@section('content')
    
    <h1>Post something here..</h1>

    {!! Form::open(['action' => 'App\Http\Controllers\PostsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{ Form::label('title', 'Title')}}
            {{ Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title..']) }}
        </div>
        <div class="form-group">
            {{ Form::label('body', 'Body')}}
            {{ Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Say something..']) }}
        </div>
        <br>
        {{ Form::submit('Submit', ['class' => 'btn btn-danger']) }}
    {!! Form::close() !!}

@endsection