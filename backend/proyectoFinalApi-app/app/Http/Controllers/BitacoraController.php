<?php

namespace App\Http\Controllers;

use App\Models\Bitacora;
use Illuminate\Http\Request;

class BitacoraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bitacora =new Bitacora();
        return $bitacora->all(); 
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
                'idbitacora' => 'required|numeric', // Agregar validación para idbitacora
                'bitacora' => 'required|string', // Agregar validación para bitacora
                'idusuario' => 'required|numeric', // Agregar validación para idusuario
                'fecha' => 'required|date', // Agregar validación para fecha
                'hora' => 'required', // Puedes agregar validación para hora según tu formato
                'ip' => 'required|ip', // Agregar validación para IP
                'so' => 'required|string', // Agregar validación para sistema operativo
                'navegador' => 'required|string', // Agregar validación para navegador
                'usuario' => 'required|string', // Agr
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()],422);
        }
    
        $bitacora = new Bitacora();
        $bitacora->idbitacora = $request->idbitacora;
        $bitacora->bitacora = $request->bitacora;
        $bitacora->idusuario = $request->idusuario;
        $bitacora->fecha = $request->fecha;
        $bitacora->hora = $request->hora;
        $bitacora->ip = $request->ip;
        $bitacora->so = $request->so;
        $bitacora->navegador = $request->navegador;
        $bitacora->usuario = $request->usuario;
        $bitacora->save();
    
        return response()->json("Bitacora guardada correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show(Bitacora $bitacora)
    {
        $bitacora = Bitacora::find($id);
        return response()->json($bitacora);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bitacora $bitacora)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    try {
        $validated = $request->validate([
            'idbitacora' => 'required|numeric',
            'bitacora' => 'required|string',
            'idusuario' => 'required|numeric',
            'fecha' => 'required|date',
            'hora' => 'required',
            'ip' => 'required|ip',
            'so' => 'required|string',
            'navegador' => 'required|string',
            'usuario' => 'required|string',
        ]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }

    // Buscar la bitácora por su ID
    $bitacora = Bitacora::find($id);

    if (!$bitacora) {
        return response()->json(['error' => 'Bitácora no encontrada'], 404);
    }

    // Actualizar los campos de la bitácora
    $bitacora->idbitacora = $request->input('idbitacora');
    $bitacora->bitacora = $request->input('bitacora');
    $bitacora->idusuario = $request->input('idusuario');
    $bitacora->fecha = $request->input('fecha');
    $bitacora->hora = $request->input('hora');
    $bitacora->ip = $request->input('ip');
    $bitacora->so = $request->input('so');
    $bitacora->navegador = $request->input('navegador');
    $bitacora->usuario = $request->input('usuario');
    $bitacora->save();

    return response()->json("Bitácora actualizada correctamente");
}



    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $bitacora = Bitacora::find($id);

    if (!$bitacora) {
        return response()->json(['error' => 'Bitácora no encontrada'], 404);
    }

    $bitacora->delete();

    return response()->json('Bitácora eliminada correctamente');
}

}
