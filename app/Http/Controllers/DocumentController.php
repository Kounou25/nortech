<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    /**
     * Store a newly created document in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    $userId = User::where('email', $request->session()->get('user_email'))->first();
        // Validation des données
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'filiere' => 'required|exists:filieres,id',
            'description' => 'required|string',
            'niveau' => 'required|exists:niveaux,id',
            'couverture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120', // 5MB max
        ]);

        try {
            // Gestion de l'upload de l'image
            $couverturePath = null;
            if ($request->hasFile('couverture')) {
                $couverturePath = $request->file('couverture')->store('couverture', 'public');
            }

            // Création du document
            $document = Document::create([
                'title' => $validated['title'],
                'description' => $validated['description'],
                'file_path' => $couverturePath,
                'uploaded_by' =>$userId->id , // Récupère user_id depuis la session
                'filiere_id' => $validated['filiere'],
                'niveau_id' => $validated['niveau'],
                
                
            ]);

            return redirect()->route('libra.teachers.index')->with('success', 'Document ajouté avec succès !');

        } catch (\Exception $e) {
            // Suppression du fichier uploadé en cas d'erreur
            if ($couverturePath) {
                Storage::disk('public')->delete($couverturePath);
            }

            return back()->withErrors(['error' => 'Une erreur est survenue lors de l\'ajout du document.'.$couverturePath.''.$validated['title'].' '. $userId->id])->withInput();
        }
    }

    public function index()
    {
        // Récupérer les documents avec les noms de filière et de niveau
        $documents = Document::with(['filiere', 'niveau'])->get();
    
        return view('libra.index', compact('documents'));
    }
    
}