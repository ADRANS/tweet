<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TimelineController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(): View
    {
        return view('timeline', [
            'tweets' => Tweet::latest('id')->get(),
        ]);
    }
}
