<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended($this->redirectTo());
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    protected function redirectTo() {
        if ( auth()->user()->is_admin() ) {
            return '/admin/dashboard';
            // Redirection pour les administrateurs
        } elseif ( auth()->user()->is_client() ) {
            return '/user';
            // Redirection pour les clients
        } elseif ( auth()->user()->is_livreur() ) {
            return '/livreur/livraisonslist';
            // Redirection pour les livreurs
        } else {
            return '/register';
            // Redirection par défa
}
    }}