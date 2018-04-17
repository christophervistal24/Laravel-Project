@extends('layouts.app')
@section('title','Home')
@section('content')

<div class="jumbotron text-center">
    <h1>Home</h1>
    <p>Welcome to S - Blog</p>
    @if ($post === null)
        <p><a class="btn btn-primary" href="/login">Login</a> <a class="btn btn-success" href="/register">Register</a></p>
    @endif
</div>

@endsection