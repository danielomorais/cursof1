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

        #dd($produtos);

        return view('produtos', compact('tituloDaPagina', 'produtos'));
    }

    public function categorias(Request $request)
    {
        $tituloDaPagina = 'Listagem de Categorias!!!';

        $categorias = [
            'Vestuário',
            'Eletrônicos',
            'Brinquedos',
            'Alimentação'
        ];

        return view('categorias', compact('tituloDaPagina', 'categorias'));
    }
}
