<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Show the page
     *
     * @return View
     */
    public function showAbout()
    {
        return view('blog.about');
    }
}
