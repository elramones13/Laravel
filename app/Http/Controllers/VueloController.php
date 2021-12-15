<?php

namespace App\Http\Controllers;

use App\Models\Vuelo;
use Illuminate\Http\Request;

class VueloController extends Controller
{
    public function index()
    {
        $vuelos = Vuelo::all();
        return view('vuelos.index', compact('vuelos'));
    }

    public function create()
    {
        return view('vuelos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'id' => 'required',
            'codigo' => 'required|alpha_num',
            'origen' => 'required|different:destino',
            'destino' => 'required|different:origen',
            'fecha' => 'required|date|after:today',
            'hora' => 'required',
            'piloto_id' => 'required'
        ]);

        Vuelo::create($request->all());

        return redirect()->route('vuelos.index');
    }

    public function edit($id)
    {
        $vuelo = Vuelo::find($id);
        return view('vuelos.edit', compact('vuelo'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id' => 'required',
            'codigo' => 'required|alpha_num',
            'origen' => 'required|different:destino',
            'destino' => 'required|different:origen',
            'fecha' => 'required|date|after:today',
            'hora' => 'required',
            'piloto_id' => 'required'
        ]);

        $vuelo = Vuelo::find($id);
        $vuelo->update($request->all());

        return redirect()->route('vuelos.index');
    }

    public function destroy($id)
    {
        $vuelo = Vuelo::find($id)->delete();
        return redirect()->route('vuelos.index');
    }

}

