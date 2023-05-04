<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $table = "usuarios";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'cpf',
        'email',
        'senha'
    ];

    public function getAuthPassword()
    {
        return $this->senha;
    }
}
