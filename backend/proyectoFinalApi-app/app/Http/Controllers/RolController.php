<?php

namespace App\Http\Controllers;

use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Rol::all();
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
            'idrol' => 'required|numeric|min:1',
            'rol' => 'required|string|min:2|max:255',
            'fechacreacion' => 'required|date',
            'fechamodificacion' => 'required|date',
            'usuariocreacion' => 'required|string|min:2|max:255',
            'usuariomodificacion' => 'required|string|min:2|max:255',
        ]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }
    
    $rol = new Rol();
    $rol->idrol = $request->idrol;
    $rol->rol = $request->rol;
    $rol->fechacreacion = $request->fechacreacion;
    $rol->fechamodificacion = $request->fechamodificacion;
    $rol->usuariocreacion = $request->usuariocreacion;
    $rol->usuariomodificacion = $request->usuariomodificacion;
    $rol->save();
    
   /*  return response()->json(['message' => 'Rol guardado correctamente'], 201); */
    return response()->json("Rol guardado correctamente");
}


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $rol = Rol::find($id);
    
        if (!$rol) {
            return response()->json(['error' => 'Rol no encontrado'], 404);
        }
    
        return response()->json($rol);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rol $rol)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    // Verificar que el recurso exista antes de actualizarlo
    $rol = Rol::find($id);

    if (!$rol) {
        return response()->json(['error' => 'Rol no encontrado'], 404);
    }

    // Validar y actualizar los datos del rol
    try {
        $validated = $request->validate([
            'rol' => 'required|string|min:2|max:255',
            'fechacreacion' => 'required|date',
            'fechamodificacion' => 'required|date',
            'usuariocreacion' => 'required|string|min:2|max:255',
            'usuariomodificacion' => 'required|string|min:2|max:255',
        ]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }

    $rol->rol = $request->input('rol');
    $rol->fechacreacion = $request->input('fechacreacion');
    $rol->fechamodificacion = $request->input('fechamodificacion');
    $rol->usuariocreacion = $request->input('usuariocreacion');
    $rol->usuariomodificacion = $request->input('usuariomodificacion');
    $rol->save();

    return response()->json($rol);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    // Lógica para eliminar el recurso con el ID proporcionado
    $rol = Rol::find($id);

    if (!$rol) {
        return response()->json(['error' => 'Rol no encontrado'], 404);
    }

    $rol->delete();

    return response()->json(['message' => 'Rol eliminado correctamente']);
}

}
