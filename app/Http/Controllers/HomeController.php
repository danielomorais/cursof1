<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function produtos(Request $request)
    {
        $tituloDaPagina = 'Listagem de produtos TOP!!';

        $produtos = Produto::all();

        return view('produtos', compact('tituloDaPagina', 'produtos'));
    }

    public function categorias(Request $request)
    {
        
    }
}
