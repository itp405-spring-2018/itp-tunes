@extends('main-layout')

@section('title', 'Profile')

@section('content')
    <h1>Welcome back, {{$user->name}}</h1>
    <p>Your email is {{$user->email}}</p>

    <h2>Post a Tweet</h2>
    <form action="/tweets" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <textarea name="body" rows="8" cols="80" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Post Tweet</button>
    </form>

@endsection
