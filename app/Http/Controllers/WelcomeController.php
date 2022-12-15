<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vignette;


class WelcomeController extends Controller
{
    function welcome() {
        $vignettes = Vignette::all();
        return view('welcome', ['vignettes' => $vignettes]);
    }
}
