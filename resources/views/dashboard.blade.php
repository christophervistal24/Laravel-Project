@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                    @endif
                    <a href="/posts/create" class="btn btn-outline-primary">Create Post</a>
                    <br><br>
                    <h3>Your Blog Posts</h3>
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        @if (count($posts) > 0)
                        <tbody>
                            @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                                <td><a class="btn btn-info" href="/posts/{{$post->id}}/edit">Edit</a></td>
                                <td>
                                 {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method' => 'post', 'class' => 'float-right'])!!}
                                    {{Form::hidden('_method','DELETE')}}
                                    {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        @else
                        <p>You have no posts</p>
                        @endif
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection