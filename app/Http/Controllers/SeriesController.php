<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'Peaky Blinders',
            'Breaking Bad',
            'La casa de papel',
        ];

    return view('listar-series')->with('series', $series);
    }
}
