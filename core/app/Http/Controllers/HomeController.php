<?php

namespace App\Http\Controllers;

use URL;
use SEO;
use App\Jobs\TestJobs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        SEO::opengraph()->setUrl(URL::current());

        $menu = 'orders';

        return view('home', compact('menu'));
    }
}
