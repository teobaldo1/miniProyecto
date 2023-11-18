<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Alumno::all();
    }

   

    
    public function store(Request $request)
    {
        $alumno= new Alumno();
        $alumno->nombre= $request->nombre;
        $alumno->dni= $request->dni;
        $alumno->correo= $request->correo;
        $alumno->direccion= $request->direccion;
        $alumno->telefono= $request->telefono;
        $alumno->save();
        return "guardado correctamente";
    }

   
    public function update(Request $request, $id)
    {
        $alumno= Alumno::find($id);
        $alumno->nombre= $request->nombre;
        $alumno->dni= $request->dni;
        $alumno->correo= $request->correo;
        $alumno->direccion= $request->direccion;
        $alumno->telefono= $request->telefono;
        $alumno->save();
        return 'actualizado correctamente';
    }

  
    public function destroy($id)
    {
        $alumnos= Alumno::find($id);
        $alumnos->delete();
        return "Alumno elimidado correctamente";
    }
}
