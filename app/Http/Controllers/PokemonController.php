<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function pokemon(Request $request)
    {
        $nome = $request->nome;
        return view('pokemon', compact('nome'));
    }
}
