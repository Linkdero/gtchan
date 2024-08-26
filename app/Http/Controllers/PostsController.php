<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index($slug)
    {
        // Aquí va la lógica para obtener los posts de un tema
        return response()->json(['message' => "Listado de posts para el tema $slug"]);
    }
}
