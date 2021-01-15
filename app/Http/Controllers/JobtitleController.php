<?php

namespace App\Http\Controllers;
use App\Area;
use App\Jobtitle;
use Illuminate\Http\Request;

class JobtitleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function create(Area $area)
    {
  /*       return $area; */
        $area_id = $area->id;
        return view('jobtitle.create', compact('area'));
    }

    public function store(Request $request)
    {
        /* return $request->all(); */
        Jobtitle::create($request->all());
        return back()->with('status','Los items han sido guardados.');

    }

    public function edit(Jobtitle $jobtitle)
    {
        return view('jobtitle.edit', compact('jobtitle'));
    }

    public function update(Request $request, Jobtitle $jobtitle)
    {
        $jobtitle->update($request->all());
        $jobtitle_id = $jobtitle->id;

        /* return redirect()
            ->action('AreaController@show',[$jobtitle_id])
            ->with('status','¡Felicitaciones! los datos fueron actualizados'); */
        return redirect()
            ->back()
            ->with('status','¡Felicitaciones! los datos fueron actualizados');
        /* return back()->with('status','¡Felicitaciones! los datos fueron actualizados'); */
    }

    public function destroy(Jobtitle $jobtitle)
    {
      $jobtitle->delete();
      return back()->with('status', '¡Uff! Ese proyecto ahora es historia.');
    }

}
