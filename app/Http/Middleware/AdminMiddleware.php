<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        $user = Auth::user();
        //si utilisateurs pas connecter on retourne à login
        if(!$user){
            return redirect()->route('login');
        }
        // si le role user est différent de admin on retourne sur login
        if($user->role !== User::ADMIN_ROLE)
        {
            return redirect()->route('login');
        }

        return $next($request);
    }
}

