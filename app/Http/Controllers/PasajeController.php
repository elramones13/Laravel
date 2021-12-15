<?php

namespace App\Http\Controllers;

use App\Models\Pasaje;
use Illuminate\Http\Request;

class PasajeController extends Controller
{
    public function index()
    {
        $pasajes = Pasaje::all();
        return view('pasajes.index', compact('pasajes'));
    }

    public function create()
    {
        return view('pasajes.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'vuelo_id' => 'required',
            'precio' => 'required',
        ]);

        Pasajecreate($request->all());

        return redirect()->route('pasajes.index');
    }

    public function edit($id)
    {
        $pasajes = Pasaje::find($id);
        return view('pasajes.vuelos', compact('pasajes'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id' => 'required',
            'nombre' => 'required',
            'apellidos' => 'required',
            'vuelo_id' => 'required',
            'precio' => 'required',

        ]);

        $pasajes = Pasaje::find($id);
        $pasajes->update($request->all());

        return redirect()->route('pasajes.index');
    }

    public function destroy($id)
    {
        $pasajes = Pasaje::find($id)->delete();
    }
}