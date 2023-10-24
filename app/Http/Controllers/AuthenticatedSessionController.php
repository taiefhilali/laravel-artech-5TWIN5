<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    // Afficher le formulaire de connexion
    public function create()
    {
        return view('auth.login');
    }

    // Traiter une tentative de connexion
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // // if (Auth::attempt($request->only('email', 'password'))) {
        //     if (Auth::attempt(['username'=>$username, 'password'=>$password])) {
        //     return redirect()->intended('admin/dashboard');
        // }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Déconnecter l'utilisateur
    public function destroy()
    {
        Auth::logout();

        return redirect('/');
    }
}

