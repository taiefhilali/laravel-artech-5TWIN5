<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckClient {
    /**
    * Handle an incoming request.
    *
    * @param  \Closure( \Illuminate\Http\Request ): ( \Symfony\Component\HttpFoundation\Response )  $next
    */

    public function handle( $request, Closure $next ) {
        if ( Auth::check() && Auth::user()->role === 0 ) {
            return $next( $request );
        }

        return redirect( '/home' );
        // Ou une autre page pour les utilisateurs normaux
    }
}