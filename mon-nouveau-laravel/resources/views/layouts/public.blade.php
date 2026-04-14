<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'UVBF - Université Virtuelle du Burkina Faso')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="antialiased bg-slate-50 text-slate-800 font-sans selection:bg-uv-green-500 selection:text-white">
    <nav class="bg-white/90 backdrop-blur-md sticky top-0 z-50 border-b border-slate-100 shadow-sm relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <a href="{{ url('/') }}" class="flex items-center gap-4 hover:opacity-80 transition">
                    <img src="{{ asset('logo.png') }}" class="h-12 w-auto object-contain" alt="Logo UVBF">
                    <span class="hidden md:block text-2xl font-black tracking-tight text-slate-900">UVBF</span>
                </a>
                
                <!-- Menu Bureau -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('public.formations') }}" class="text-slate-600 hover:text-uv-green-600 font-semibold text-sm tracking-wide transition">Formations</a>
                    <a href="{{ route('public.debouches') }}" class="text-slate-600 hover:text-uv-green-600 font-semibold text-sm tracking-wide transition">Débouchés</a>
                    <a href="{{ route('public.enseignants') }}" class="text-slate-600 hover:text-uv-green-600 font-semibold text-sm tracking-wide transition">L'Équipe</a>
                    <a href="{{ route('public.actualites') }}" class="text-slate-600 hover:text-uv-green-600 font-semibold text-sm tracking-wide transition">Actualités</a>
                    <a href="{{ route('public.contact') }}" class="text-slate-600 hover:text-uv-green-600 font-semibold text-sm tracking-wide transition">Contact</a>
                    <div class="h-6 w-px bg-slate-200"></div>
                    @auth
                        <a href="{{ url('/dashboard') }}" class="px-5 py-2.5 rounded-full bg-green-600 text-white font-medium text-sm hover:bg-green-700 transition shadow-lg shadow-green-200 flex items-center gap-2">Mon espace</a>
                    @else
                        <a href="{{ route('login') }}" class="text-uv-green-600 font-semibold text-sm hover:text-uv-green-800 transition">Connexion</a>
                        <a href="{{ route('register') }}" class="text-uv-green-600 font-semibold text-sm hover:text-uv-green-800 transition">Créer un compte</a>
                    @endauth
                </div>

                <!-- Bouton Mobile -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-btn" class="text-slate-600 hover:text-uv-green-600 focus:outline-none p-2">
                        <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Menu Mobile (Caché par défaut) -->
        <div id="mobile-menu" class="hidden md:hidden absolute w-full bg-white border-b border-slate-100 shadow-xl pb-6 pt-2 px-4 flex flex-col space-y-4">
            <a href="{{ route('public.formations') }}" class="text-slate-600 font-bold block px-2 py-1 hover:text-uv-green-600">Formations</a>
            <a href="{{ route('public.debouches') }}" class="text-slate-600 font-bold block px-2 py-1 hover:text-uv-green-600">Débouchés</a>
            <a href="{{ route('public.enseignants') }}" class="text-slate-600 font-bold block px-2 py-1 hover:text-uv-green-600">L'Équipe</a>
            <a href="{{ route('public.actualites') }}" class="text-slate-600 font-bold block px-2 py-1 hover:text-uv-green-600">Actualités</a>
            <a href="{{ route('public.contact') }}" class="text-slate-600 font-bold block px-2 py-1 hover:text-blue-600">Contact</a>
            <hr class="my-2 border-slate-100">
            @auth
                <a href="{{ url('/dashboard') }}" class="w-full text-center py-3 rounded-full bg-green-600 text-white font-bold block">Mon espace</a>
            @else
                <a href="{{ route('login') }}" class="w-full text-center py-3 rounded-full bg-blue-50 text-blue-800 font-bold block">Connexion</a>
                <a href="{{ route('register') }}" class="w-full text-center py-3 rounded-full bg-slate-100 text-slate-900 font-bold block">Créer un compte</a>
            @endauth
        </div>
    </nav>
    <main class="min-h-screen">
        @yield('content')
    </main>
    <footer class="bg-slate-900 text-slate-400 py-12 text-center text-sm">
        &copy; {{ date('Y') }} Université Virtuelle du Burkina Faso (UVBF). Tous droits réservés.
    </footer>

    <script>
        document.getElementById('mobile-menu-btn').addEventListener('click', function() {
            var menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>
</body>
</html>
