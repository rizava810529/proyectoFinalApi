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
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'idenlace' => 'required',
                'idpagina' => 'required',
                'idrol' => 'required',
                'descripcion' => 'required',
                'fechacreacion' => 'required',
                'fechamodificacion' => 'required',
                'usuariocreacion' => 'required',
                'usuariomodificacion' => 'required',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
        
        $enlace = new Enlace();
        $enlace->idenlace = $request->idenlace;
        $enlace->idpagina = $request->idpagina;
        $enlace->idrol = $request->idrol;
        $enlace->descripcion = $request->descripcion;
        $enlace->fechacreacion = $request->fechacreacion;
        $enlace->fechamodificacion = $request->fechamodificacion;
        $enlace->usuariocreacion = $request->usuariocreacion;
        $enlace->usuariomodificacion = $request->usuariomodificacion;
        $enlace->save();
        
        return response()->json("Enlace guardado correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Enlace $enlace)
    {
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
                'idenlace' => 'required',
                'idpagina' => 'required',
                'idrol' => 'required',
                'descripcion' => 'required',
                'fechacreacion' => 'required',
                'fechamodificacion' => 'required',
                'usuariocreacion' => 'required',
                'usuariomodificacion' => 'required',
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
        
        $enlace->update($request->all());
        
        return response()->json("Enlace actualizado correctamente");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Enlace $enlace)
    {
        $enlace->delete();
        return response()->json("Enlace eliminado correctamente");
    }
}
