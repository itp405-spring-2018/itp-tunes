@extends('layouts.app')

@section('title', 'Create Playlist')

@section('content')
    <h1>My Playlists</h1>
    @if ($errors->isNotEmpty())
        <div class="alert alert-danger" role="alert">
            <ul>
                @foreach ($errors->all() as $message)
                    <li>{{$message}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/playlists" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="playlist">Playlist Name</label>
            <input type="text" class="form-control" name="playlist" id="playlist" value="{{old('playlist')}}">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
