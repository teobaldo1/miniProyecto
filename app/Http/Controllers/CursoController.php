<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    
    public function index()
    {
        $curso= Curso::all();
       
       return $curso;
    }

    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $curso= new Curso();
        $curso->nombre= $request->nombre;
        $curso->save();
        return "guardado correctamente";
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        $curso= Curso::find($id);
        $curso->nombre= $request->nombre;
        
        $curso->save();
        return 'actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $curso= Curso::find($id);
        $curso->delete();
        return "Curso elimidado correctamente";
    }
}
