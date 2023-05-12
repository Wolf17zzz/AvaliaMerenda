<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cardapio extends Model
{
    use HasFactory;

    protected $table = "cardapios";

    protected $fillable = [
        'dia_semana',
        'refeicao_principal',
        'sobremesa',
        'bebida',
        'valor_calorico',
        'escola'

    ];

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }
}
