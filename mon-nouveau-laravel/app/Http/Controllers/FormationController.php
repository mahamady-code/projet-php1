<?php

namespace App\Http\Controllers;

use App\Models\Formation;
use Illuminate\Http\Request;

class FormationController extends Controller
{
    public function index()
    {
        $formations = Formation::latest()->get();
        return view('formations.index', compact('formations'));
    }

    public function create()
    {
        return view('formations.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'duree' => 'nullable|string|max:100',
            'niveau_requis' => 'nullable|string|max:100',
        ]);

        Formation::create($request->all());

        return redirect()->route('formations.index')->with('success', 'Formation ajoutée avec succès !');
    }

    public function edit(Formation $formation)
    {
        return view('formations.edit', compact('formation'));
    }

    public function update(Request $request, Formation $formation)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
            'duree' => 'nullable|string|max:100',
            'niveau_requis' => 'nullable|string|max:100',
        ]);

        $formation->update($request->all());

        return redirect()->route('formations.index')->with('success', 'Formation modifiée !');
    }

    public function destroy(Formation $formation)
    {
        $formation->delete();
        return redirect()->route('formations.index')->with('success', 'Formation supprimée !');
    }
}
