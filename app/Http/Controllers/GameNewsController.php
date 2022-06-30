<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameNewsController extends Controller
{
    public function gaming_news()
    {
        return view('front.gaming-news');
    }
}
