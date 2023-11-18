<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use Illuminate\Http\Request;

class AsistenciaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return Asistencia::all();
    }

   
    public function store(Request $request)
    {
     
        $asistencia= new Asistencia();
        $asistencia->id_alumno= $request->id_alumno;
        $asistencia->fecha= $request->fecha;
        $asistencia->opciones= $request->opciones;
        $asistencia->save();
        return "guardado correctamente";
    }

    /**
     * Display the specified resource.
     */
    public function show(Asistencia $asistencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Asistencia $asistencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $asistencia=Asistencia::find($id);
        $asistencia->id_alumno= $request->id_alumno;
        $asistencia->fecha= $request->fecha;
        $asistencia->opciones= $request->opciones;
        $asistencia->save();
        return "guardado correctamente";
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $asistencia=Asistencia::find($id);
        $asistencia->delete();
        return "Eliminado correctamente";

    }
}
