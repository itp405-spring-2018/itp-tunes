@extends('main-layout')

@section('title', 'My Profile')

@section('content')
<h1>Welcome back, {{$user->name}}</h1>
<p>{{$user->email}}</p>
@endsection
