@extends('layouts.app')
@section('title',$post->title);
@section('content')
    <a href="/posts" class="">Go back</a>
    <h1>{{$post->title}}</h1>
    <img style="width:100%;" src="https://evening-woodland-41780.herokuapp.com/lsapp/public/storage/cover_images/{{$post->cover_image}}">
    <br><br>
    <div class="">
        {!! $post->body !!}
    </div>
    <hr>
    <small class="text-capitalize text-muted">Written on {{$post->created_at}} by {{$post->user->name}}</small>
    <hr>
    @if (!Auth::guest())
        @if (Auth::user()->id == $post->user_id)
             <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' => 'post', 'class' => 'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection
