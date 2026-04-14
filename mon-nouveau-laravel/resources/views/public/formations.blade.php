@extends('layouts.public')
@section('title', 'Nos Formations - UVBF')

@section('content')
<div class="max-w-7xl mx-auto py-16 px-4">
    <h2 class="text-4xl font-extrabold text-slate-900 mb-4 text-center">Nos Formations d'Excellence</h2>
    <p class="text-xl text-slate-600 text-center mb-12 max-w-3xl mx-auto">Découvrez les programmes académiques conçus pour répondre aux défis technologiques du futur.</p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse($formations as $f)
        <div class="bg-white rounded-2xl p-8 shadow-sm border border-slate-100 hover:shadow-xl transition-shadow">
            <div class="w-12 h-12 bg-uv-green-50 text-uv-green-600 rounded-xl flex items-center justify-center mb-6">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path></svg>
            </div>
            <h3 class="text-2xl font-bold text-slate-800 mb-2">{{ $f->titre }}</h3>
            <div class="flex gap-4 mb-4 text-sm font-semibold text-blue-600">
                @if($f->duree) <span>⏱ {{ $f->duree }}</span> @endif
                @if($f->niveau_requis) <span>🎓 Requis: {{ $f->niveau_requis }}</span> @endif
            </div>
            <p class="text-slate-600 line-clamp-3 leading-relaxed">{{ $f->description }}</p>
            <a href="{{ route('preinscriptions.create') }}" class="mt-8 inline-block px-6 py-2 bg-slate-900 text-white rounded-full text-sm font-semibold hover:bg-slate-800 transition">S'inscrire</a>
        </div>
        @empty
            <div class="col-span-3 text-center text-slate-500 py-12">Les formations seront bientôt annoncées.</div>
        @endforelse
    </div>
</div>
@endsection
