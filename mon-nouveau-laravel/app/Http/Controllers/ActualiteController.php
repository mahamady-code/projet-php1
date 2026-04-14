<?php

namespace App\Http\Controllers;

use App\Models\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::latest()->get();
        return view('actualites.index', compact('actualites'));
    }

    public function create()
    {
        return view('actualites.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'contenu' => 'required|string',
            'date_publication' => 'nullable|date',
        ]);

        Actualite::create($request->all());

        return redirect()->route('actualites.index')->with('success', 'Actualité ajoutée avec succès !');
    }

    public function destroy(Actualite $actualite)
    {
        $actualite->delete();
        return redirect()->route('actualites.index')->with('success', 'Actualité retirée.');
    }
}
