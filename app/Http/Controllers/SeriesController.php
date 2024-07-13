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
        $nomeSerie = $request->input('nome');
        $serie = New Serie();
        $serie->nome = $nomeSerie;
        $serie->save();

        return redirect('/series');
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
