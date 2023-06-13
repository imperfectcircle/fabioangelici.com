<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function gallarate() {
        return view('landing.gallarate');
    }

    public function malnate() {
        return view('landing.malnate');
    }
}
