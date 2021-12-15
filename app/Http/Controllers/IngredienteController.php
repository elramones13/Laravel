<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ingrediente;

class ingredienteController extends Controller
{
    public function index()
    {
        $ingredientes = Ingrediente::all();
        $saludo = "<h1 style='color: red;'>Hola desde el controlador</h1>";

        return view('ingredientes.index', compact('ingredientes', 'saludo'));
    }

    public function create()
    {
        //mostrar el formulario de creación
        return view('ingredientes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'color' => 'required',
            'id_receta' => 'required',
        ]);

        Ingrediente::create($request->all());


        return redirect()->route('ingredientes.index');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $ingredientes = Ingrediente::find($id);
        return view('ingredientes.edit', compact('ingredientes'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required|min:1|max:50',
            'color' => 'required',
        ]);

        $ingredientes = Ingrediente::find($id);
        $ingredientes->update($request->all());

        return redirect()->route('ingredientes.index');
    }

    public function destroy($id)
    {
        ingrediente::find($id)->delete();
        // return redirect('/ingredientes'); //estas dos instrucciones hacen lo mismo
        return redirect()->route('ingredientes.index');
    }
}