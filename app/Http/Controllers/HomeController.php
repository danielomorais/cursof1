<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function produtos(Request $request)
    {
        $tituloDaPagina = 'Listagem de produtos TOP!!';

        $produtos = [
            'Samsung Galaxy S25',
            'Iphone 16',
            'Bola de Couro',
            'Gloos Morango Europeu',
            'Corsa Wind 98'
        ];

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
