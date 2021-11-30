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
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        receta::create($request->all());

        /*
        almacenar el nuevo receta
        $receta = new receta();
        $receta->codigo = $request->codigo;
        $receta->empresa = $request->empresa;
        $receta->contacto = $request->contacto;
        $receta->direccion = $request->direccion;
        $receta->ciudad = $request->ciudad;
        $receta->save();
        */

        return redirect()->route('recetas.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $receta = receta::find($id);
        return view('recetas.edit', compact('receta'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'codigo' => 'required|min:3|max:15',
            'empresa' => 'required|min:10|max:50',
            'contacto' => 'required',
        ]);

        $receta = receta::find($id);
        $receta->update($request->all());

        return redirect()->route('recetas.index');
    }

    public function destroy($id)
    {
        receta::find($id)->delete();
        // return redirect('/recetas'); //estas dos instrucciones hacen lo mismo
        return redirect()->route('recetas.index');
    }
}