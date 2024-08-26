<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug'];

    public function temas()
    {
        return $this->hasMany(Temas::class, 'categoria_id');
    }
}
