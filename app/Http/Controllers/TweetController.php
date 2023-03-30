<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function store(Request 
    $request)

{
    $tweet = new Tweet();

    $tweet->user_id = auth()->id();
    $tweet->content =
    $tweet->content;
    $tweet->save();

    return redirect()->back();
}
}
