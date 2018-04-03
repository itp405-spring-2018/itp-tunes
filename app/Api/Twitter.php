<?php

namespace App\Api;

use Auth;
use Abraham\TwitterOAuth\TwitterOAuth;

class Twitter
{
    public function postStatus($body)
	{
        $user = Auth::user();
        $token = $user->twitter_token;
        $tokenSecret = $user->twitter_token_secret;

        $connection = new TwitterOAuth(
            env('TWITTER_CLIENT_ID'),
            env('TWITTER_CLIENT_SECRET'),
            $token,
            $tokenSecret
        );
        $content = $connection->get('account/verify_credentials');
        $connection->post('statuses/update', [
            'status' => $body
        ]);
        return redirect('/profile');
	}
}
