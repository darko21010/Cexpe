<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TalleresController extends Controller
{
    public function talleres()
    {
        $talleres = [
            ['Titulo' => 'Danza'],
            ['Titulo' => 'Baile'],
            ['Titulo' => 'Oratoria'],
            ['Titulo' => 'Liderazgo'],
        ];
        return view('talleres', compact('talleres'));
    }
}