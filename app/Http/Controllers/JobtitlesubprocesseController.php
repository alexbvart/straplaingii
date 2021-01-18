<?php

namespace App\Http\Controllers;
use App\Jobtitlesubprocesse;
use DB;
use Illuminate\Http\Request;

class JobtitlesubprocesseController extends Controller
{
    public function store(Request $request)
    {
        /* return $request->all(); */
        $jobtitle = $request->jobtitle;
        $subprocessesArray=$request->get('subprocesses');
        $responsibilityArray=$request->get('responsibility');
        /* return $jobtitle; */
 /*            $jobtitlesubprocesse=Jobtitlesubprocesse::create([
                'subprocesse_id'=> $subprocessesArray[$key],
                'jobtitle_id'=> $jobtitle,
                'reponsibility_id'=> $responsibilityArray[$key]
            ]); */
        foreach ($subprocessesArray as $key => $insert) {
            

            DB::table('jobtitle_subprocesse')->insert([
                'subprocesse_id'=> $subprocessesArray[$key],
                'jobtitle_id'=> $jobtitle,
                'reponsibility_id'=> $responsibilityArray[$key]
            ]);
        }



/*        $request->validate([
            'subprocesse_id'=> 'required',
            'jobtitle_id'=> 'required',
            'reponsibility_id'=> 'required'
        ]);
        
  
        $subprocesse = Subprocesse::create($request->all());

        if ($request->get('subprocesses')) {
            $subprocesse->subprocesses()->sync($request->get('subprocesses'));
        } */


        return back()->with('status','Las estratdfsasfsdegias han sido guardadas con exito.'); 
        /*  return redirect()->route('strategie.create')->with('status','Los items han sido guardados.'); */

    }
}
