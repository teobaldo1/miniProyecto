<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Docente::all();
    }

   

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $docente= new Docente();
        $docente->nombre= $request->nombre;
        $docente->dni= $request->dni;
        $docente->correo= $request->correo;
        $docente->direccion= $request->direccion;
        $docente->telefono= $request->telefono;
        $docente->id_curso= $request->id_curso;
        $docente->save();
        return "guardado correctamente";
    }

   

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $docente= Docente::find($id);
        $docente->nombre= $request->nombre;
        $docente->dni= $request->dni;
        $docente->correo= $request->correo;
        $docente->direccion= $request->direccion;
        $docente->telefono= $request->telefono;
        $docente->id_curso= $request->id_curso;
        $docente->save();
        return 'actualizado correctamente';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $docente= Docente::find($id);
        $docente->delete();
        return "Docente elimidado correctamente";
    }
}
