<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerFeedController extends Controller
{
    public function player_feed()
    {
        return view('front.player_feed');
    }
}
