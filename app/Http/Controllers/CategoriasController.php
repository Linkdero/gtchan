<?php

namespace App\Http\Controllers;

use App\Models\Categorias;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    public function index()
    {
        // Obtener todas las categorías con sus respectivos temas
        $categorias = Categorias::with('temas')->get();

        return response()->json($categorias);
    }
}
