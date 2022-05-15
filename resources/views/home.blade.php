@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    <a href="/posts/create" class="btn btn-secondary">Post here</a>
                    <br><br>
                    <h1>Your Posts</h1>

                    @if (count($posts) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>TITLE</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach ($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="/posts/{{$post->id}}/edit" class="btn btn-warning">EDIT</a></th>
                                    <th>
                                        {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!! Form::close() !!}
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    @else
                        <p class="blockquote-footer">No Posts yet!</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
