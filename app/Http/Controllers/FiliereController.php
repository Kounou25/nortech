<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFiliereRequest;
use App\Http\Requests\UpdateFiliereRequest;
use App\Models\Filiere;
use App\Models\Niveau;


class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all();
        $niveaux = Niveau::all();
        return view('libra.teachers.index', compact('filieres','niveaux'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFiliereRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Filiere $filiere)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filiere $filiere)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFiliereRequest $request, Filiere $filiere)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filiere $filiere)
    {
        //
    }
}
