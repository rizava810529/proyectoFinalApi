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
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }
    
        // Asigna el valor de 'fechacreacion' con la fecha y hora actual
        $validated['fechacreacion'] = now();
    
        $pagina = Pagina::create($validated);
    
        return response()->json("Página guardada correctamente");
    }
    
    


    /**
     * Display the specified resource.
     */
    public function show(Pagina $pagina)
    {
        return response()->json($pagina);
    }
    public function update(Request $request, $id)
{
    // Valida y actualiza el recurso
    $pagina = Pagina::find($id);
    
    if (!$pagina) {
        return response()->json("Página no encontrada", 404);
    }
    
    $pagina->update($request->all());

    return response()->json("Página actualizada correctamente");
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $pagina = Pagina::find($id);
        if ($pagina) {
            $pagina->delete();
            return response()->json("Página eliminada correctamente");
        }
        
        return response()->json("Página no encontrada", 404);
    }
}
