<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;
use App\Api\Twitter;

class TweetsController extends Controller
{
    public function store(Request $request)
    {
        $twitter = new Twitter();
        $twitter->postStatus($request->body);
        return redirect('/profile');
    }
}
