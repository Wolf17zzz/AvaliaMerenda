<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escola extends Model
{
    use HasFactory;

    protected $table = "escolas";

    protected $fillable = [
        'nome',
        'endereco',
        'cnpj'
    ];

    public function cardapios()
    {
        return $this->hasMany(Cardapio::class, 'escolas_id');
    }
}
