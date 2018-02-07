@extends('layouts.app')

@section('title', 'Playlists')

@section('content')
    <h1>{{$playlist->Name}}</h1>
    <ul>
        @foreach($tracks as $track)
          <li>{{$track->Name}}</li>
        @endforeach
    </ul>
@endsection
