<?php

namespace App\Http\Controllers;

use URL;
use SEO;
use Illuminate\Contracts\Support\Renderable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        SEO::opengraph()->setUrl(URL::current());

        $menu = 'orders';

        return view('home', compact('menu'));
    }
}
