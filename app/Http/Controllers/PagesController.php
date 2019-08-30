<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function event()
    {
        return view('pages.event');
    }
}
