<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;

class PlaylistsController extends Controller
{
    public function index()
    {
        return view('playlists', [
            'playlists' => DB::table('playlists')->get()
        ]);
    }

    public function create()
    {
        return view('playlist-create');
    }

    public function store(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'playlist' => 'required|min:3'
        ]);

        if ($validation->passes()) {
            DB::table('playlists')->insert([
                'Name' => $request->input('playlist')
            ]);

            return redirect('/playlists');
        } else {
            return redirect('/playlists/new')
                ->withErrors($validation)
                ->withInput();
        }
    }
}
