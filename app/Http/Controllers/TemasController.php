<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemasController extends Controller
{
    public function index($slug)
    {
        // Aquí va la lógica para obtener los temas de una categoría
        return response()->json(['message' => "Listado de temas para la categoría $slug"]);
    }
}
