<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Socialite;
use App\Api\Twitter;

class TweetsController extends Controller
{
    public function store(Request $request)
	{
		$user = Auth::user();

		$twitter = new Twitter();
		$twitter->postStatus($request->body);
		return redirect('/profile');
	}
}
