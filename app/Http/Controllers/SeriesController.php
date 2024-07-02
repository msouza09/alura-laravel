<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        return redirect('https://www.google.com/');
        $series = [
            'Peaky Blinders',
            'Breaking Bad',
            'La casa de papel',
        ];

        $html = '<ul>';
        foreach ($series as $serie){
            $html .= "<li>$serie</li>";
        }
        $html .= '</ul>';

        return $html;
    }
}
