<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Temas extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'slug', 'categoria_id'];

    public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categoria_id');
    }
}
