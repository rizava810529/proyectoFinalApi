<?php
namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;
use Exception;

class PersonaController extends Controller
{
    public function index()
    {
        return Persona::all();
    }

    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'primer_nombre' => 'required|string|min:2|max:100',
                'segundo_nombre' => 'nullable|string|min:2|max:100',
                'primer_apellido' => 'required|string|min:2|max:100',
                'segundo_apellido' => 'nullable|string|min:2|max:100',
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        $persona = Persona::create($validated);

        return response()->json("Persona guardada correctamente");
    }

    public function show($id)
    {
        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }

        return response()->json($persona);
    }

    public function update(Request $request, $id)
    {
        try {
            $validated = $request->validate([
                'primer_nombre' => 'required|string|min:2|max:100',
                'segundo_nombre' => 'nullable|string|min:2|max:100',
                'primer_apellido' => 'required|string|min:2|max:100',
                'segundo_apellido' => 'nullable|string|min:2|max:100',
            ]);
        } catch (Exception $e) {
            return response()->json(['error' => $e->getMessage()], 422);
        }

        $persona = Persona::find($id);
        if (!$persona) {
            return response()->json(['error' => 'Persona no encontrada'], 404);
        }

        $persona->update($validated);

        return response()->json($persona);
    }

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
