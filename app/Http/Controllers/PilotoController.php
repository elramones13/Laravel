<?php

namespace App\Http\Controllers;

use App\Models\Piloto;
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
            'id' => 'required',
            'codigo' => 'required',
            'origen' => 'required|different:destino',
            'destino' => 'required|different:origen',
            'fecha' => 'required|date|after:today',
            'hora' => 'required',
            'piloto_id' => 'required'
        ]);

        Piloto::create($request->all());

        return redirect()->route('pilotos.index');
    }

    public function edit($id)
    {
        $piloto = Piloto::find($id);
        return view('pilotos.edit', compact('piloto'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'id' => 'required',
            'codigo' => 'required',
            'origen' => 'required|different:destino',
            'destino' => 'required|different:origen',
            'fecha' => 'required|date|after:today',
            'hora' => 'required',
            'piloto_id' => 'required'
        ]);

        $piloto = Piloto::find($id);
        $piloto->update($request->all());

        return redirect()->route('pilotos.index');
    }

    public function destroy($id)
    {
        $piloto = Piloto::find($id)->delete();
        return redirect()->route('pilotos.index');
    }
}

