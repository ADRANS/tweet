<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TweetUpdateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id): RedirectResponse
    {
        $tweet = Tweet::find($id);

        $tweet->update([
            'content' => Request('content'),
        ]);
        return redirect()->back();
    }
}
