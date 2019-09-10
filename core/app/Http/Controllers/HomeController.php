<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use URL;
use SEO;
use App\Jobs\TestJobs;

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

        // TestJobs::dispatch()->delay(now()->addMinutes(1));
        

        return view('metronic');
    }
}
