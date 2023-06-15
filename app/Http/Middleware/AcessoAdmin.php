<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AcessoAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Caso o usuario não seja admin ele é redirecionado para a home
        $user = $request->user();

        if(get_class($user) !== 'App\Models\Usuario' || !$user->super_admin){
            return redirect()->route('inicio');
        }

        return $next($request);
    }
}
