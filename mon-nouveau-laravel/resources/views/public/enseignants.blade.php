@extends('layouts.public')
@section('title', 'L\'Équipe Pédagogique - UVBF')

@section('content')
<div class="max-w-7xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-extrabold text-slate-900 mb-12 text-center">Des Experts à Votre Service</h2>
    
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
        @forelse($enseignants as $p)
        <div class="bg-white rounded-2xl p-6 text-center shadow-sm border border-slate-100 hover:-translate-y-2 transition-transform duration-300">
            <div class="w-24 h-24 bg-gradient-to-tr from-blue-100 to-indigo-100 rounded-full mx-auto mb-4 border-4 border-white shadow-lg flex items-center justify-center text-blue-600 font-bold text-3xl uppercase">
                {{ substr($p->prenom, 0, 1) }}{{ substr($p->nom, 0, 1) }}
            </div>
            <h3 class="text-xl font-bold text-slate-800">{{ $p->prenom }} {{ $p->nom }}</h3>
            <p class="text-blue-600 font-medium mb-3">{{ $p->specialite }}</p>
            @if($p->email)
                <a href="mailto:{{ $p->email }}" class="text-sm text-slate-500 hover:text-blue-600">Contacter</a>
            @endif
        </div>
        @empty
            <div class="col-span-4 text-center text-slate-500 py-12">L'équipe sera mise à jour très bientôt.</div>
        @endforelse
    </div>
</div>
@endsection
