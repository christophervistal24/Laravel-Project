@extends('layouts.app')
@section('title','Home')
@section('content')

<div class="jumbotron text-center">
    <h1>{{$title}}</h1>
    <p>Welcome to S-Blog</p>
    <p><a class="btn btn-primary" href="/login">Login</a> <a class="btn btn-success" href="/register">Register</a></p>
</div>

@endsection