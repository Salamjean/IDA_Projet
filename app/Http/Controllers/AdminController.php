<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function register(){
        return view('admin.auth.register');
    }
    public function login(){
        return view('admin.auth.login');
    }

    public function handleRegister(Request $request)
{
    // Validation des données
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:admins,email',
        'password' => 'required|min:8',
        'password_confirmation' => 'required|same:password',
    ], [
        'name.required' => 'Le nom est obligatoire.',
        'email.required' => 'L\'adresse e-mail est obligatoire.',
        'email.email' => 'Veuillez fournir une adresse e-mail valide.',
        'email.unique' => 'Cette adresse e-mail existe déjà.',
        'password.required' => 'Le mot de passe est obligatoire.',
        'password.min' => 'Le mot de passe doit avoir au moins 8 caractères.',
        'password_confirmation.required' => 'La confirmation du mot de passe est obligatoire.',
        'password_confirmation.same' => 'Les mots de passe ne correspondent pas.',
    ]);
    
    try {
        // Création du nouveau compte
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'password_confirmation' => Hash::make($request->password_confirmation),
        ]);
    
        // Redirection avec un message de succès
        return redirect()->route('admin.login')->with('success', 'Votre compte a été créé avec succès. Vous pouvez vous connecter.');
    } catch (\Exception $e) {
        // En cas d'erreur inattendue
        return back()->withErrors(['error' => 'Une erreur est survenue. Veuillez réessayer.'])->withInput();
    }
}
public function handleLogin(Request $request)
{
    $request->validate([
        'email' =>'required|exists:admins,email',
        'password' => 'required|min:8',
    ], [
        'email.required' => 'Le mail est obligatoire.',
        'email.exists' => 'Cette adresse mail n\'existe pas.',
        'password.required' => 'Le mot de passe est obligatoire.',
        'password.min'=> 'Le mot de passe doit avoir au moins 8 caractères.',
    ]);
    try {
            return redirect()->route('admin.dashboard')->with('Bienvenu sur votre page ');
        } catch (Exception $e) {
            dd($e);
        }
}

public function index(){
    return view('admin.dashboard');
}

public function logout(){
    return redirect()->route('admin.login');
}
}
