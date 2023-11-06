<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Exception;

class UsuarioController extends Controller
{
    public function index()
    {
        return Usuario::all();
    }

    public function show($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        return response()->json($usuario);
    }

    public function store(Request $request)
{
    try {
        $validated = $request->validate([
            'idpersona' => 'required',
            // Otros campos...
        ]);

        $usuariocreacion = substr($request->input('usuariocreacion'), 0, 255);
        $validated['usuariocreacion'] = $usuariocreacion;

        $usuario = Usuario::create($validated);

        return response()->json("Usuario guardado correctamente");
    } catch (Exception $e) {
        return response()->json(['error' => $e->getMessage()], 422);
    }
}


    

    public function update(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        try {
            $validated = $request->validate([
                'idusuario' => 'required',
    'idpersona' => 'required',
    'usuario' => 'required|string|min:2|max:100',
    'clave' => 'required|string|min:8|max:255',
    'habilitado' => 'required|boolean',
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

        $usuario->update($validated);

        return response()->json($usuario);
    }

    public function destroy($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $usuario->delete();

        return response()->json("Usuario eliminado correctamente");
    }
}
