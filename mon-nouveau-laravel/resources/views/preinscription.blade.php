<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Préinscription - UVBF Sciences Informatiques</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        .animate-fade-in-down { animation: fadeInDown 0.6s ease-out; }
        .animate-fade-in-up { animation: fadeInUp 0.8s ease-out 0.2s backwards; }
        .animate-slide-in { animation: slideIn 0.6s ease-out; }
        .animate-float { animation: float 3s ease-in-out infinite; }
        .form-input-group {
            animation: fadeInUp 0.6s ease-out backwards;
        }
        .form-input-group:nth-child(1) { animation-delay: 0.3s; }
        .form-input-group:nth-child(2) { animation-delay: 0.4s; }
        .form-input-group:nth-child(3) { animation-delay: 0.5s; }
        .form-input-group:nth-child(4) { animation-delay: 0.6s; }
        .form-input-group:nth-child(5) { animation-delay: 0.7s; }
        .form-input-group:nth-child(6) { animation-delay: 0.8s; }
        .btn-submit {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
        }
        .btn-submit:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(30, 41, 59, 0.2);
        }
        input, select, textarea {
            transition: all 0.3s ease;
        }
        input:focus, select:focus, textarea:focus {
            transform: translateY(-2px);
            box-shadow: 0 0 0 3px rgba(100, 200, 255, 0.1);
        }
        .stat-item {
            animation: fadeInUp 0.6s ease-out backwards;
        }
        .stat-item:nth-child(1) { animation-delay: 0.4s; }
        .stat-item:nth-child(2) { animation-delay: 0.5s; }
        .stat-item:nth-child(3) { animation-delay: 0.6s; }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans">
    
    <nav class="bg-white shadow border-b border-slate-100 p-6 animate-fade-in-down">
        <div class="max-w-7xl mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-2xl font-extrabold text-blue-700 transition-colors hover:text-blue-900">&larr; Retour à l'accueil</a>
        </div>
    </nav>

    <div class="max-w-3xl mx-auto py-16 px-4">
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden animate-fade-in-up">
            <div class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr] bg-gradient-to-r from-slate-900 via-slate-800 to-slate-900 text-white p-10 items-center animate-fade-in-down">
                <div>
                    <p class="text-sm font-semibold uppercase tracking-[0.24em] text-cyan-300 animate-slide-in">Préinscription UVBF</p>
                    <h1 class="mt-4 text-4xl font-extrabold leading-tight animate-fade-in-up" style="animation-delay: 0.2s">Rejoignez la prochaine génération de talents numériques</h1>
                    <p class="mt-4 text-slate-200 leading-7 animate-fade-in-up" style="animation-delay: 0.3s">Remplissez ce formulaire et notre équipe vous accompagnera pour finaliser votre dossier. C'est simple, rapide et sécurisé.</p>
                    <div class="mt-8 grid gap-3 sm:grid-cols-3">
                        <div class="rounded-3xl bg-white/10 p-4 stat-item transition-all hover:bg-white/20 hover:scale-105">
                            <p class="text-xl font-bold">+30</p>
                            <p class="text-sm text-slate-300">Formations</p>
                        </div>
                        <div class="rounded-3xl bg-white/10 p-4 stat-item transition-all hover:bg-white/20 hover:scale-105">
                            <p class="text-xl font-bold">100%</p>
                            <p class="text-sm text-slate-300">Suivi des candidatures</p>
                        </div>
                        <div class="rounded-3xl bg-white/10 p-4 stat-item transition-all hover:bg-white/20 hover:scale-105">
                            <p class="text-xl font-bold">24h</p>
                            <p class="text-sm text-slate-300">Réponse rapide</p>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center lg:justify-end">
                    <img src="{{ asset('logo.png') }}" alt="UVBF Logo" class="h-72 w-72 rounded-[2rem] object-cover border-8 border-white/20 shadow-2xl bg-white/5 animate-float transition-transform hover:scale-110 duration-300" />
                </div>
            </div>

            <div class="p-10">
                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-6 py-4 rounded-xl mb-6 font-semibold flex items-center gap-3">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('preinscriptions.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 form-input-group">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Prénom</label>
                            <input type="text" name="prenom" required class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Nom de famille</label>
                            <input type="text" name="nom" required class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 form-input-group">
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Adresse Email</label>
                            <input type="email" name="email" required class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-slate-700 mb-2">Numéro de Téléphone</label>
                            <input type="tel" name="telephone" required class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                        </div>
                    </div>

                    <div class="form-input-group">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Dernier Diplôme Obtenu (ex: Baccalauréat C, Licence FR)</label>
                        <input type="text" name="diplome" required class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                    </div>

                    <div class="form-input-group">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Choix de la Formation</label>
                        <select name="formation_id" required class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500">
                            <option value="" disabled selected>Sélectionnez une option...</option>
                            @foreach($formations as $f)
                                <option value="{{ $f->id }}">{{ $f->titre }} @if($f->niveau_requis)(Niveau: {{ $f->niveau_requis }})@endif</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-input-group">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Joindre un document (CV, CNI, ou Attestation de réussite) - Optionnel (Max 5Mo)</label>
                        <input type="file" name="fichier_joint" accept=".pdf,.png,.jpg,.jpeg" class="w-full rounded-lg border-slate-300 py-2">
                    </div>

                    <div class="form-input-group">
                        <label class="block text-sm font-medium text-slate-700 mb-2">Message supplémentaire (Optionnel)</label>
                        <textarea name="message" rows="4" class="w-full rounded-lg border-slate-300 focus:ring-blue-500 focus:border-blue-500"></textarea>
                    </div>

                    <button type="submit" class="w-full py-4 bg-blue-600 text-white rounded-xl font-bold hover:bg-blue-700 transition shadow-lg shadow-blue-200 btn-submit animate-fade-in-up" style="animation-delay: 0.9s">
                        Soumettre ma candidature
                    </button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
