<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::orderBy('nome')->get(['id', 'nome']);
        return view('series.index', ['series' => $series]);
    }


    public function create(){
        return view('series.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $nomeSerie = $request->input('nome');
        $serie = new Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series')->with('success', 'Série adicionada com sucesso!');
    }

    public function edit($id)
    {
        $serie = Serie::findOrFail($id);
        return view('series.edit', compact('serie'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
        ]);

        $serie = Serie::findOrFail($id);
        $serie->nome = $request->input('nome');
        $serie->save();

        return redirect('/series')->with('success', 'Série atualizada com sucesso!');
    }

    public function destroy($id) {
        $serie = Serie::find($id);

        if (!$serie) {
            return redirect()->route('series.index')->with('error', 'Série não encontrada.');
        }

        $serie->delete();

        return redirect()->route('series.index')->with('sucess', 'Série excluida com sucesso.');
    }
}
