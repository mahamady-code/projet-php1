<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    $stats = [
        'formations' => \App\Models\Formation::count(),
        'enseignants' => \App\Models\Enseignant::count(),
        'actualites' => \App\Models\Actualite::count(),
        'debouches' => \App\Models\Debouche::count(),
        'preinscriptions' => \App\Models\Preinscription::count(),
    ];

    // Calculer les données du graphique (Répartition)
    $chartData = \DB::table('preinscriptions')
        ->join('formations', 'preinscriptions.formation_id', '=', 'formations.id')
        ->select('formations.titre', \DB::raw('count(preinscriptions.id) as total'))
        ->groupBy('formations.titre')
        ->get();

    $chartLabels = $chartData->pluck('titre');
    $chartValues = $chartData->pluck('total');

    return view('dashboard', compact('stats', 'chartLabels', 'chartValues'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/setup-admin', function() {
    $user = \App\Models\User::firstOrCreate(
        ['email' => 'admin@uvbf.bf'],
        [
            'name' => 'Admin UVBF',
            'password' => \Illuminate\Support\Facades\Hash::make('password'),
            'email_verified_at' => now(),
        ]
    );
    $user->update(['password' => \Illuminate\Support\Facades\Hash::make('password')]);
    
    \Illuminate\Support\Facades\Auth::login($user);
    return redirect('/dashboard')->with('success', 'Compte Admin Créé et Connecté !');
});

Route::get('/nos-formations', function () {
    return view('public.formations', ['formations' => \App\Models\Formation::all()]);
})->name('public.formations');

Route::get('/nos-enseignants', function () {
    return view('public.enseignants', ['enseignants' => \App\Models\Enseignant::all()]);
})->name('public.enseignants');

Route::get('/actualites-uvbf', function () {
    return view('public.actualites', ['actualites' => \App\Models\Actualite::latest('created_at')->get()]);
})->name('public.actualites');

Route::get('/debouches-professionnels', function () {
    return view('public.debouches', ['debouches' => \App\Models\Debouche::all()]);
})->name('public.debouches');

Route::get('/contact', function() {
    return view('public.contact');
})->name('public.contact');

Route::get('/injecter-formations', function() {
    $titres = [
        'Mathématiques Informatique',
        'Sciences physiques et de l\'ingénierie',
        'Sciences Économie et de gestion',
        'Lettre moderne',
        'Droit',
        'Génie logiciel',
        'Svt'
    ];
    foreach($titres as $t) {
        \App\Models\Formation::firstOrCreate(
            ['titre' => $t], 
            ['description' => 'Programme académique en ' . $t, 'duree' => '3 ans']
        );
    }
    return redirect()->route('formations.index')->with('success', 'Les 7 filières officielles ont été créées !');
});

Route::get('/preinscription', [\App\Http\Controllers\PreinscriptionController::class, 'create'])->name('preinscriptions.create');
Route::post('/preinscription', [\App\Http\Controllers\PreinscriptionController::class, 'store'])->name('preinscriptions.store');

Route::middleware(['auth'])->group(function () {
    Route::resource('formations', \App\Http\Controllers\FormationController::class);
    Route::resource('enseignants', \App\Http\Controllers\EnseignantController::class);
    Route::resource('actualites', \App\Http\Controllers\ActualiteController::class);
    Route::resource('debouches', \App\Http\Controllers\DeboucheController::class);
    
    Route::get('/preinscriptions/{preinscription}/print', [\App\Http\Controllers\PreinscriptionController::class, 'print'])->name('preinscriptions.print');
    Route::get('/preinscriptions/export', [\App\Http\Controllers\PreinscriptionController::class, 'export'])->name('preinscriptions.export');
    Route::get('/preinscriptions', [\App\Http\Controllers\PreinscriptionController::class, 'index'])->name('preinscriptions.index');
    Route::delete('/preinscriptions/{preinscription}', [\App\Http\Controllers\PreinscriptionController::class, 'destroy'])->name('preinscriptions.destroy');
});

require __DIR__.'/auth.php';
