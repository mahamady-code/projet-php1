@extends('layouts.public')
@section('title', 'Actualités - UVBF')

@section('content')
<div class="max-w-7xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-extrabold text-slate-900 mb-12 text-center">Dernières Actualités</h2>
    
    <div class="space-y-8 max-w-4xl mx-auto">
        @forelse($actualites as $actu)
        <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 flex flex-col md:flex-row gap-6">
            <div class="md:w-1/4">
                <div class="text-sm font-bold text-blue-600 uppercase tracking-wider mb-1">{{ \Carbon\Carbon::parse($actu->date_publication ?? $actu->created_at)->translatedFormat('d M. Y') }}</div>
                <div class="w-12 h-1 bg-blue-100 rounded"></div>
            </div>
            <div class="md:w-3/4">
                <h3 class="text-2xl font-bold text-slate-800 mb-4">{{ $actu->titre }}</h3>
                <div class="prose text-slate-600 max-w-none">
                    {!! $actu->contenu !!}
                </div>
            </div>
        </div>
        @empty
            <div class="text-center text-slate-500 py-12 bg-white rounded-2xl shadow-sm border border-slate-100">Aucune actualité pour le moment.</div>
        @endforelse
    </div>
</div>
@endsection
