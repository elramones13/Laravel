<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
use App\Models\Vuelo;
use Illuminate\Http\Request;

class PilotoController extends Controller
{
    public function index()
    {
        $pilotos = Piloto::all();
        return view('pilotos.index', compact('pilotos'));
    }

    public function create()
    {
        return view('pilotos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'f_nacimiento' => 'required',
            'email' => 'required|email',
            'dni' => 'required',
            'telefono' => 'required'
        ]);

        Piloto::create($request->all());

        return redirect()->route('pilotos.index');
    }

    public function edit($id)
    {
        $pilotos = Piloto::find($id);
        return view('pilotos.edit', compact('pilotos'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nombre' => 'required',
            'apellidos' => 'required',
            'f_nacimiento' => 'required',
            'email' => 'required|email',
            'dni' => 'required',
            'telefono' => 'required'
        ]);

        $pilotos = Piloto::find($id);
        $pilotos->update($request->all());

        return redirect()->route('pilotos.index');
    }

    public function destroy($id)
    {
        $pilotos = Piloto::find($id)->delete();
    }
}