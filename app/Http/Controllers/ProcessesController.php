<?php

namespace App\Http\Controllers;
use App\Processe;
use App\Subprocesse;
use App\Reponsibility;
use App\Area;
use App\Jobtitle;
use Illuminate\Http\Request;

class ProcessesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $processes = Processe::latest()->paginate();
        
        return view('processe.index', compact('processes')); 
    }

    public function create()
    {
        return view('processe.create');
    }

    public function store(Request $request)
    {
        /* return $request->all(); */
        Processe::create($request->all());

        return back()->with('status','Los items han sido guardados.');
    }

    public function show(Processe $processe)
    {
        $processe_id = $processe->id;
        $subprocesses = Subprocesse::where('processe_id','=',$processe_id)->paginate();
        //llenar listas
        $reponsibility = Reponsibility::all();
        $area = Area::all();
        /* $jobtitle = Jobtitle::all(); */

        return view('processe.show', compact('processe','subprocesses','reponsibility','area')); 
        /* return view('processe.show', compact('processe','subprocesses','reponsibility','area','jobtitle'));  */
    }
    
    public function getjob(Request $request)
    {
        if (isset($request->texto)) {
            $jobtitle = Jobtitle::where('area_id','=',$request->texto)->get();

            /* $jobtitle = Jobtitle::whereArea_id($request->texto)->get(); */
            return response()->json([
                'lista' => $jobtitle,
                'success' => true
            ]);
        }else{
            return response()->json([
                'success' => false
            ]);
        }
        return view('processe.show', compact('processe'));
    }
    
    public function edit(Processe $processe)
    {
        return view('processe.edit', compact('processe'));
    }

    public function update(Request $request, Processe $processe)
    {
        $processe->update($request->all());
        return back()->with('status','¡Felicitaciones! los datos fueron actualizados');
    }

    public function destroy(Processe $processe)
    {
      $processe->delete(); 
      return back()->with('status', '¡Uff! Ese proyecto ahora es historia.');
    }
}
