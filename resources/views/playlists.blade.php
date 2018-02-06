@extends('layouts.app')

@section('title', 'Playlists')

@section('content')
    <h1>My Playlists</h1>
    <a href="/playlists/new">Add Playlist</a>
    <ul>
        @foreach($playlists as $playlist)
          <li>{{$playlist->Name}}</li>
        @endforeach
    </ul>
@endsection
