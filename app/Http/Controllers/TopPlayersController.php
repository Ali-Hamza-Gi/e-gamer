<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopPlayersController extends Controller
{
    public function top_players()
    {
        return view('front.top-players');
    }
}
