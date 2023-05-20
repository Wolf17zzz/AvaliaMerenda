<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    use HasFactory;

    protected $table = "avaliacao";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        
        'cardapio_id',
        'comentario'
    ];

    public function cardapio()
    {
        return $this->belongsTo(Cardapio::class);
    }
}
