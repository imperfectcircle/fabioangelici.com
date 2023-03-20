<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function varese() {
        return view('landing.varese');
    }

    public function gallarate() {
        return view('landing.gallarate');
    }
}
