<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function contact_us()
    {
        return view('front.contact_us');
    }
}
