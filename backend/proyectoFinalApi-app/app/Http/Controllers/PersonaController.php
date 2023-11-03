<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Exception;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Persona::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Deja esto vacío ya que no necesitas crear una nueva persona aquí
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'idpersona' => 'required',
                'primernombre' => 'required|string|min:2|max:100',
                'segundonombre' => 'nullable|string|min:2|max:100',
                'primerapellido' => 'required|string|min:2|max:100',
                'segundoapellido' => 'nullable|string|min:2|max:100',
                'fechacreacion' => 'required',
                'fechamodificacion' => 'required',
                'usuariocreacion' => 'required',
                'usuariomodificacion' => 'required',
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        $persona = new Persona();
        $persona->idpersona = $request->idpersona;
        $persona->primernombre = $request->primernombre;
        $persona->segundonombre = $request->segundonombre;
        $persona->primerapellido = $request->primerapellido;
        $persona->segundoapellido = $request->segundoapellido;
        $persona->fechacreacion = $request->fechacreacion;
        $persona->fechamodificacion = $request->fechamodificacion;
        $persona->usuariocreacion = $request->usuariocreacion;
        $persona->usuariomodificacion = $request->usuariomodificacion;
        $persona->save();

        return response()->json("Persona guardada correctamente");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }

        return response()->json($persona);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        // Deja esto vacío ya que no necesitas editar la persona aquí
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'idpersona' => 'required',
                'primernombre' => 'required|string|min:2|max:100',
                'segundonombre' => 'nullable|string|min:2|max:100',
                'primerapellido' => 'required|string|min:2|max:100',
                'segundoapellido' => 'nullable|string|min:2|max:100',
                'fechacreacion' => 'required',
                'fechamodificacion' => 'required',
                'usuariocreacion' => 'required',
                'usuariomodificacion' => 'required',
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }

        $persona->idpersona = $request->idpersona;
        $persona->primernombre = $request->primernombre;
        $persona->segundonombre = $request->segundonombre;
        $persona->primerapellido = $request->primerapellido;
        $persona->segundoapellido = $request->segundoapellido;
        $persona->fechacreacion = $request->fechacreacion;
        $persona->fechamodificacion = $request->fechamodificacion;
        $persona->usuariocreacion = $request->usuariocreacion;
        $persona->usuariomodificacion = $request->usuariomodificacion;
        $persona->save();

        return response()->json($persona);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }

        $persona->delete();

        return response()->json("Persona eliminada correctamente");
    }
}
