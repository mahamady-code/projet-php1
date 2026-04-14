<?php

namespace App\Http\Controllers;

use App\Models\Preinscription;
use App\Models\Formation;
use Illuminate\Http\Request;

class PreinscriptionController extends Controller
{
    // Côté Public : Formulaire
    public function create()
    {
        $formations = Formation::all();
        return view('preinscription', compact('formations'));
    }

    // Côté Public : Soumission
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'diplome' => 'required|string|max:255',
            'fichier_joint' => 'nullable|file|mimes:pdf,jpg,jpeg,png|max:5120',
            'formation_id' => 'required|exists:formations,id',
            'message' => 'nullable|string',
        ]);

        $data = $request->all();
        if ($request->hasFile('fichier_joint')) {
            $data['fichier_joint'] = $request->file('fichier_joint')->store('dossiers', 'public');
        }

        $preinscription = Preinscription::create($data);

        // Envoi de l'email automatique (Dans un Try/Catch pour ne pas bloquer si le .env n'est pas configuré)
        try {
            \Illuminate\Support\Facades\Mail::to($preinscription->email)
                ->send(new \App\Mail\PreinscriptionWelcome($preinscription));
        } catch (\Exception $e) {
            \Illuminate\Support\Facades\Log::error("Erreur d'envoi d'email : " . $e->getMessage());
        }

        return redirect()->back()->with('success', 'Votre candidature a été envoyée avec succès ! Un e-mail de confirmation vient de vous être envoyé (vérifiez vos spams).');
    }

    // Côté Admin : Liste avec Recherche
    public function index(\Illuminate\Http\Request $request)
    {
        $query = Preinscription::with('formation')->latest();

        // Réception et filtrage selon le mot-clé de recherche
        if ($request->has('search') && $request->search != '') {
            $s = $request->search;
            $query->where('nom', 'LIKE', "%{$s}%")
                  ->orWhere('prenom', 'LIKE', "%{$s}%")
                  ->orWhere('email', 'LIKE', "%{$s}%");
        }

        $preinscriptions = $query->get();
        return view('preinscriptions.index', compact('preinscriptions'));
    }

    // Côté Admin : Export complet en PDF
    public function export()
    {
        $preinscriptions = Preinscription::with('formation')->latest()->get();
        return view('preinscriptions.export_pdf', compact('preinscriptions'));
    }

    // Côté Admin : Suppression
    public function destroy(Preinscription $preinscription)
    {
        $preinscription->delete();
        return redirect()->back()->with('success', 'Dossier supprimé.');
    }

    // Côté Admin : Impression de la Fiche
    public function print(Preinscription $preinscription)
    {
        return view('preinscriptions.print', compact('preinscription'));
    }
}
