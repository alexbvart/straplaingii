<?php

namespace App\Http\Controllers;
use App\Area;
use App\Processe;

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
        $areas = Area::latest()->paginate();
        $processes = Area::latest()->paginate();
        return view('home', compact('areas','processes')); 

    }
}
