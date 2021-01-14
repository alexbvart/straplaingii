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

    public function show(Processe $processe)
    {
        $processe_id = $processe->id;
        $subprocesses = Subprocesse::where('processe_id','=',$processe_id)->paginate();

        return view('processe.show', compact('processe','subprocesses')); 
    }
}
