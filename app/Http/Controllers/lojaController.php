<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;
use App\Models\Fotos;

class lojaController extends Controller
{
    public function index(){
        $carros = Carro::with('fotos')->get();
        $carrosPorMarca = $carros->groupBy('marca');


        return view('menu.index', compact('carros', 'carrosPorMarca'));
    }

    public function perMarca(Request $request){
        $marca = $request->input('marca');
        $carrosPorMarca = $carros->groupBy('marca');
        $query = Carro::with('fotos');

        if ($marca) {
        $query->where('marca', $marca);
        }

        $carros = $query->get();

        return view('menu.marca', compact('carros', 'marca', 'carrosPorMarca'));
    }
}
