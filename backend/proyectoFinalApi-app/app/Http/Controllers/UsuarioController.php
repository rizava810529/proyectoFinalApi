<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Usuario::all();
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        $asuario = Usuario::find($id);
        return response()->json($asuario);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
{
    try {
        $validated = $request->validate([
            'idusuario' => 'required',
            'idpersona' => 'required',
            'usuario' => 'required|string|min:2|max:100',
            'clave' => 'required|string|min:8|max:255', // Cambié la longitud mínima a 8 por seguridad
            'habilitado' => 'required|boolean', // Cambié a boolean para representar un valor verdadero/falso
            'fecha' => 'required',
            'idrol' => 'required',
            'fechacreacion' => 'required',
            'fechamodificacion' => 'required',
            'usuariocreacion' => 'required',
            'usuariomodificacion' => 'required',
        ]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }

    $alumno = Alumno::find($id);
    $alumno->idusuario = $request->idusuario;
    $alumno->idpersona = $request->idpersona;
    $alumno->usuario = $request->usuario;
    $alumno->clave = $request->clave;
    $alumno->habilitado = $request->habilitado;
    $alumno->fecha = $request->fecha;
    $alumno->idrol = $request->idrol;
    $alumno->fechacreacion = $request->fechacreacion;
    $alumno->fechamodificacion = $request->fechamodificacion;
    $alumno->usuariocreacion = $request->usuariocreacion;
    $alumno->usuariomodificacion = $request->usuariomodificacion;
    $alumno->save();

    return response()->json($alumno);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        $usuario = Usuario::find($id);
        $usuario->delete();
        return "Alumno eliminado correctamente";
    }
}
