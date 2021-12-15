<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Receta;

class recetaController extends Controller
{
    public function index()
    {
        $recetas = Receta::all();
        $saludo = "<h1 style='color: red;'>Hola desde el controlador</h1>";

        return view('recetas.index', compact('recetas', 'saludo'));
    }

    public function create()
    {
        //mostrar el formulario de creación
        return view('recetas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'precio' => 'required',
            'calorias' => 'required',
            'f_alta' => 'required'
        ]);

        receta::create($request->all());

        return redirect()->route('recetas.index');
    }

    public function edit($id)
    {
        $receta = receta::find($id);
        return view('recetas.edit', compact('receta'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|min:1|max:50',
            'descripcion' => 'required',
        ]);

        $receta = receta::find($id);
        $receta->update($request->all());

        return redirect()->route('recetas.index');
    }

    public function destroy($id)
    {
        $receta = receta::find($id)->delete();
        return redirect()->route('recetas.index');
    }
}