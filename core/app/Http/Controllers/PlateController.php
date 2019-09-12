<?php

namespace App\Http\Controllers;

use SEO;
use URL;
use App\Plate;
use Illuminate\Http\Request;

class PlateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        SEO::opengraph()->setUrl(URL::current());

        $menu = 'plates';

        return view('plates', compact('menu'));
    }

    public function datatable(){
        $response = [];

        $response["data"] = Plate::select('plate_id', 'name', 'description')->orderBy('plate_id')->get();

        return $response;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
