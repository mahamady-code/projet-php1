@extends('layouts.public')
@section('title', 'Débouchés Professionnels - UVBF')

@section('content')
<div class="max-w-7xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-extrabold text-slate-900 mb-4 text-center">Votre Avenir Commence Ici</h2>
    <p class="text-xl text-slate-600 text-center mb-12 max-w-3xl mx-auto">Nos diplômés s'insèrent immédiatement dans le marché du travail sur des métiers d'avenir.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 max-w-5xl mx-auto">
        @forelse($debouches as $deb)
        <div class="bg-gradient-to-br from-white to-slate-50 rounded-2xl p-8 shadow-sm border border-slate-200">
            <div class="flex items-center gap-4 mb-4">
                <div class="w-10 h-10 bg-indigo-100 text-indigo-600 rounded-lg flex items-center justify-center">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                </div>
                <h3 class="text-xl font-bold text-slate-900">{{ $deb->titre }}</h3>
            </div>
            <p class="text-slate-600 leading-relaxed">{{ $deb->description }}</p>
        </div>
        @empty
            <div class="col-span-2 text-center text-slate-500 py-12">Les débouchés professionnels seront ajoutés bientôt.</div>
        @endforelse
    </div>
</div>
@endsection
