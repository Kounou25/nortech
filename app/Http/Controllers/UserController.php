<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function register(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'last_name' => 'required|string|max:255',
            'first_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email',
            'phone' => 'nullable|string|max:20',
            'profile_photo' => 'nullable|image|mimes:jpeg,png,gif|max:5120', // 5MB max
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|in:enseignant,etudiant',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        // Gestion de l'image de profil
        $profileImageUrl = null;
        if ($request->hasFile('profile_photo')) {
            $file = $request->file('profile_photo');
            $filename = Str::uuid() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('profile_images', $filename, 'public');
            $profileImageUrl = Storage::url($path);
        }

        // Création de l'utilisateur
        try {
            $user = User::create([
                'nom' => $request->last_name,
                'prenom' => $request->first_name,
                'email' => $request->email,
                'telephone' => $request->phone,
                'profile_image' => $profileImageUrl,
                'password' => Hash::make($request->password),
                'role' => $request->role,
            ]);


            // // Connexion automatique de l'utilisateur après inscription
            // auth()->login($user);

            // Redirection vers une page de bienvenue ou tableau de bord
            return redirect()->route('index')
                ->with('success', 'Inscription réussie ! Bienvenue sur Libra.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Une erreur est survenue lors de l\'inscription. Veuillez réessayer.')
                ->withInput();
        }
    }


    public function login(Request $request)
    {
        // Validation des données
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|string|min:8',
            'remember' => 'nullable|boolean',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                ->withErrors($validator)
                ->withInput();
        }

        $role = User::where('email', $request->email)->value('role');

        // Tentative de connexion
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            // Connexion réussie
            $request->session()->regenerate();

            // Option 1 : Stocker l'email dans la session (décommentez si vous préférez la session)
            $request->session()->put('user_email', $request->email);

            // Option 2 : Pour localStorage, passer l'email à la vue via la session flash
            //$request->session()->flash('user_email', $request->email);

           if ($role === 'enseignant') {
                return redirect()->route('teachers.index')
                    ->with('success', 'Connexion réussie ! Bienvenue'.'   '.$request->email);
            } elseif ($role === 'etudiant') {
                return redirect()->route('libra.students.index')
                    ->with('success', 'Connexion réussie ! Bienvenue'.$request->email);
            }
        }
        // Échec de la connexion
        return redirect()->back()
            ->withErrors(['email' => 'Les identifiants fournis sont incorrects.'])
            ->withInput();
    }
}