<?php

namespace App\Http\Controllers;
use App\Area;
use App\Jobtitle;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $areas = Area::latest()->paginate();
        return view('area.index', compact('areas')); 
    }

    public function show(Area $area)
    {
        $area_id = $area->id;
        $jobtitles = Jobtitle::where('area_id','=',$area_id)->paginate();

        return view('area.show', compact('area','jobtitles')); 
    }
}
