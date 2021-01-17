<?php

namespace App\Http\Controllers;
use App\Processe;
use App\Subprocesse;
use Illuminate\Http\Request;

class SubprocesseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function create(Processe $processe)
    {
  /*       return $processe; */
        $processe_id = $processe->id;
        return view('subprocesse.create', compact('processe'));
    }

    public function store(Request $request)
    {
        /* return $request->all(); */
        Subprocesse::create($request->all());
        return back()->with('status','Los items han sido guardados.');

    }


    public function edit(Subprocesse $subprocesse)
    {
        return view('subprocesse.edit', compact('subprocesse'));
    }

    public function update(Request $request, Subprocesse $subprocesse)
    {
        $subprocesse->update($request->all());
        $subprocesse_id = $subprocesse->id;

        /* return redirect()
            ->action('processeController@show',[$subprocesse_id])
            ->with('status','¡Felicitaciones! los datos fueron actualizados'); */
        return redirect()
            ->back()
            ->with('status','¡Felicitaciones! los datos fueron actualizados');
        /* return back()->with('status','¡Felicitaciones! los datos fueron actualizados'); */
    }

    public function destroy(Subprocesse $subprocesse)
    {
      $subprocesse->delete();
      $processe=$subprocesse->processe();
        return dd($processe);
    
      return view('processe.show', compact('processe','subprocesses')); 
      /* return back()->with('status', '¡Uff! Ese proyecto ahora es historia.'); */
    }

}
