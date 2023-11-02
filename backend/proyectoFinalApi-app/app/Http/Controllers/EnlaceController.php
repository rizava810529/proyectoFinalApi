<?php

namespace App\Http\Controllers;

use App\Models\Enlace;
use Illuminate\Http\Request;

class EnlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Enlace::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                
                'idenlace' => 'required', // Validación personalizada para 'idenlace'
                'idpagina' => 'required', // Validación personalizada para 'idpagina'
                'idrol' => 'required', // Validación personalizada para 'idrol'
                'descripcion' => 'required', // Validación personalizada para 'descripcion'
                'fechacreacion' => 'required', // Validación personalizada para 'fechacreacion'
                'fechamodificacion' => 'required', // Validación personalizada para 'fechamodificacion'
                'usuariocreacion' => 'required', // Validación personalizada para 'usuariocreacion'
                'usuariomodificacion' => 'required', // Validación personalizada para 'usuariomodificacion'
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
        
       
        $alumno->idenlace = $request->idenlace; // Asignación de 'idenlace'
        $alumno->idpagina = $request->idpagina; // Asignación de 'idpagina'
        $alumno->idrol = $request->idrol; // Asignación de 'idrol'
        $alumno->descripcion = $request->descripcion; // Asignación de 'descripcion'
        $alumno->fechacreacion = $request->fechacreacion; // Asignación de 'fechacreacion'
        $alumno->fechamodificacion = $request->fechamodificacion; // Asignación de 'fechamodificacion'
        $alumno->usuariocreacion = $request->usuariocreacion; // Asignación de 'usuariocreacion'
        $alumno->usuariomodificacion = $request->usuariomodificacion; // Asignación de 'usuariomodificacion'
        $alumno->save();
        
        return response()->json("Alumno guardado correctamente");
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Enlace $enlace)
    {
        $enlace = Enlace::find($id);
        return response()->json($enlace);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enlace $enlace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Enlace $enlace)
    {
        try {
            $validated = $request->validate([
                
                'idenlace' => 'required', // Validación personalizada para 'idenlace'
                'idpagina' => 'required', // Validación personalizada para 'idpagina'
                'idrol' => 'required', // Validación personalizada para 'idrol'
                'descripcion' => 'required', // Validación personalizada para 'descripcion'
                'fechacreacion' => 'required', // Validación personalizada para 'fechacreacion'
                'fechamodificacion' => 'required', // Validación personalizada para 'fechamodificacion'
                'usuariocreacion' => 'required', // Validación personalizada para 'usuariocreacion'
                'usuariomodificacion' => 'required', // Validación personalizada para 'usuariomodificacion'
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
                        
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enlace $enlace)
    {
        $enlace = Enlace::find($id);
        $enlace->delete();
        return "Enlace eliminado correctamente";
    }
}
