<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    use HasFactory;

    protected $fillable=['Sudaderas', 'Playeras'];
    
    public function categorias()
    {
        return $this->belongsToMany(Categoria::class);
    }
    // public $timestamps = false;
}
