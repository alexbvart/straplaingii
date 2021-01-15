<?php

namespace App\Http\Controllers;
use App\Processe;
use App\Subprocesse;
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

        return view('processe.show', compact('processe','subprocesses')); 
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
