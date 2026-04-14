@extends('layouts.public')

@section('title', 'Page introuvable - UVBF')

@section('content')
<div class="min-h-[70vh] flex flex-col items-center justify-center text-center px-4 bg-slate-50 relative overflow-hidden">
    <!-- Décorations de fond -->
    <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob"></div>
    <div class="absolute top-24 -right-24 w-96 h-96 bg-green-100 rounded-full mix-blend-multiply filter blur-3xl opacity-70 animate-blob animation-delay-2000"></div>

    <div class="relative z-10">
        <div class="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-indigo-600 font-black text-9xl tracking-tighter drop-shadow-sm mb-4">
            404
        </div>
        <h1 class="mt-2 text-4xl font-extrabold tracking-tight text-slate-900 sm:text-5xl">Oups ! Chemin sans issue.</h1>
        <p class="mt-6 text-xl leading-8 text-slate-600 max-w-xl mx-auto">
            La d&eacute;couverte fait partie de l'apprentissage ! Mais la page que vous cherchez a peut-&ecirc;tre &eacute;t&eacute; d&eacute;plac&eacute;e, supprim&eacute;e ou n'a jamais exist&eacute; au sein de l'UVBF.
        </p>
        <div class="mt-10 flex items-center justify-center">
            <a href="{{ url('/') }}" class="rounded-full bg-slate-900 px-8 py-4 text-base font-semibold text-white shadow-xl hover:bg-slate-800 transition transform hover:-translate-y-1 flex gap-2 items-center">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Retourner &agrave; l'accueil
            </a>
        </div>
    </div>
</div>
@endsection
