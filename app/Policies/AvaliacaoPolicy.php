<?php

namespace App\Policies;

use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Http\Response;

class AvaliacaoPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function update($usuario, $avaliacao)
    {
        if(!$usuario->is($avaliacao->usuario)){
            return Response::deny('Voce não é o dono da avaliação');
        }

        return Response::allow();
    }
}
