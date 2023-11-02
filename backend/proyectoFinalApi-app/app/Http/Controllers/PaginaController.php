<?php

namespace App\Http\Controllers;

use App\Models\Pagina;
use Illuminate\Http\Request;
use Exception;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Pagina::all();
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
            'idpagina' => 'required',
            'fechacreacion' => 'required',
            'fechamodificacion' => 'required',
            'usuariocreacion' => 'required',
            'usuariomodificacion' => 'required',
            'url' => 'required',
            'estado' => 'required',
            'nombre' => 'required|string|min:2|max:100',
            'descripcion' => 'required|string',
            'icono' => 'required|string',
            'tipo' => 'required|string',
        ]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }

    
    $pagina = new Pagina();
    $pagina->idpagina = $request->idpagina;
    $pagina->fechacreacion = $request->fechacreacion;
    $pagina->fechamodificacion = $request->fechamodificacion;
    $pagina->usuariocreacion = $request->usuariocreacion;
    $pagina->usuariomodificacion = $request->usuariomodificacion;
    $pagina->url = $request->url;
    $pagina->estado = $request->estado;
    $pagina->nombre = $request->nombre;
    $pagina->descripcion = $request->descripcion;
    $pagina->icono = $request->icono;
    $pagina->tipo = $request->tipo;

    $pagina->save();

    return response()->json("Página guardada correctamente");
}


    /**
     * Display the specified resource.
     */
    public function show(Pagina $pagina)
    {
        return response()->json($pagina);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pagina $pagina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    /**
 * Update the specified resource in storage.
 */
public function update(Request $request, Pagina $pagina)
{
    try {
        $validated = $request->validate([
            'idpagina' => 'required',
            'fechacreacion' => 'required',
            'fechamodificacion' => 'required',
            'usuariocreacion' => 'required',
            'usuariomodificacion' => 'required',
            'url' => 'required',
            'estado' => 'required',
            'nombre' => 'required|string|max:100',
            'descripcion' => 'required|string',
            'icono' => 'required|string',
            'tipo' => 'required|string',
        ]);
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }

    if (!$pagina) {
        return response()->json("Página no encontrada", 404);
    }

    $pagina->idpagina = $request->idpagina;
    $pagina->fechacreacion = $request->fechacreacion;
    $pagina->fechamodificacion = $request->fechamodificacion;
    $pagina->usuariocreacion = $request->usuariocreacion;
    $pagina->usuariomodificacion = $request->usuariomodificacion;
    $pagina->url = $request->url;
    $pagina->estado = $request->estado;
    $pagina->nombre = $request->nombre;
    $pagina->descripcion = $request->descripcion;
    $pagina->icono = $request->icono;
    $pagina->tipo = $request->tipo;

    $pagina->save();

    return response()->json($pagina);
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
{
    $pagina = Pagina::find($id);
    if ($pagina) {
        $pagina->delete();
        return response()->json("Página eliminada correctamente");
    }
    
    return response()->json("Página no encontrada", 404);
}

}
