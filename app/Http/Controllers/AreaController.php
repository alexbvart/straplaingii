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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('area.create');
    }

    public function store(Request $request)
    {
        /* return $request->all(); */
        Area::create($request->all());

        return back()->with('status','Los items han sido guardados.');

    }

    public function show(Area $area)
    {
        $area_id = $area->id;
        $jobtitles = Jobtitle::where('area_id','=',$area_id)->paginate();

        return view('area.show', compact('area','jobtitles')); 
    }

    public function edit(Area $area)
    {
        return view('area.edit', compact('area'));
    }

    public function update(Request $request, Area $area)
    {
        $area->update($request->all());
        return back()->with('status','¡Felicitaciones! los datos fueron actualizados');
    }

    public function destroy(Area $area)
    {
      $area->delete();
      return back()->with('status', '¡Uff! Ese proyecto ahora es historia.');
    }
}
