@extends('layouts.public')

@section('title', 'Contact - UVBF')

@section('content')
<div class="bg-blue-600 py-16 sm:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-4xl font-extrabold tracking-tight sm:text-5xl lg:text-6xl mb-4">Contactez-nous</h1>
        <p class="text-xl text-blue-100 max-w-2xl mx-auto">Le service administratif de l'Université Virtuelle du Burkina Faso est à votre écoute pour toute demande d'information.</p>
    </div>
</div>

<div class="py-16 sm:py-24 bg-slate-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden mt-[-80px] grid grid-cols-1 md:grid-cols-2">
            
            <!-- Coordonnées -->
            <div class="bg-slate-900 text-white p-10 md:p-16 flex flex-col justify-center">
                <h3 class="text-2xl font-bold mb-8">Directeur des Admissions</h3>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-white/10 p-3 rounded-lg"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg></div>
                        <div>
                            <p class="font-semibold text-lg">Adresse Physique</p>
                            <p class="text-slate-300">Siège de l'Université Virtuelle<br>Ouagadougou, Burkina Faso</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-white/10 p-3 rounded-lg"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg></div>
                        <div>
                            <p class="font-semibold text-lg">Téléphone Officiel</p>
                            <p class="text-slate-300">+(226) 55 49 10 60</p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-white/10 p-3 rounded-lg"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg></div>
                        <div>
                            <p class="font-semibold text-lg">Email d'Assistance</p>
                            <p class="text-slate-300">contact@uvbf.bf</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Message Rapide -->
            <div class="p-10 md:p-16">
                <h3 class="text-2xl font-bold text-slate-800 mb-6">Écrivez-nous directement</h3>
                <form action="mailto:contact@uvbf.bf" method="post" enctype="text/plain" class="space-y-4 shadow-sm border border-gray-100 p-6 rounded-xl bg-slate-50">
                    <div>
                        <label class="block text-sm font-medium text-slate-700">Votre Nom</label>
                        <input type="text" name="nom" class="mt-1 w-full rounded-md border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700">Votre Sujet</label>
                        <select name="sujet" class="mt-1 w-full rounded-md border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            <option>Demande d'information générale</option>
                            <option>Problème d'inscription technique</option>
                            <option>Partenariat / Autre</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-slate-700">Message</label>
                        <textarea name="message" rows="4" class="mt-1 w-full rounded-md border-slate-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-lg transition shadow-md">
                        Ouvrir ma boîte mail & Envoyer
                    </button>
                    <p class="text-xs text-slate-500 text-center mt-3">*Ceci ouvrira votre logiciel de messagerie par défaut (Outlook, Mail, etc.)</p>
                </form>
            </div>
            
        </div>
    </div>
</div>
@endsection
