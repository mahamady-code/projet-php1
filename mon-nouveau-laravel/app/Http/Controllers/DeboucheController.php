<?php

namespace App\Http\Controllers;

use App\Models\Debouche;
use Illuminate\Http\Request;

class DeboucheController extends Controller
{
    public function index()
    {
        $debouches = Debouche::latest()->get();
        return view('debouches.index', compact('debouches'));
    }

    public function create()
    {
        return view('debouches.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        Debouche::create($request->all());

        return redirect()->route('debouches.index')->with('success', 'Débouché ajouté.');
    }

    public function destroy(Debouche $debouche)
    {
        $debouche->delete();
        return redirect()->route('debouches.index')->with('success', 'Débouché supprimé.');
    }
}
