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
        'escolas_id'

    ];

    public function avaliacoes()
    {
        return $this->hasMany(Avaliacao::class);
    }

    public function getNotaAttribute()
    {
        if (empty($this->avaliacoes))
            return 0;

        return number_format($this->avaliacoes->avg('nota'), 1);
    }
}
