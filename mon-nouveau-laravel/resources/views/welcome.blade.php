@extends('layouts.public')

@section('title', 'Accueil - UVBF Promotion')

@section('content')
    <div class="relative overflow-hidden pt-16 pb-20 lg:pt-24 lg:pb-28">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="lg:grid lg:grid-cols-12 lg:gap-8 items-center">
                <div class="sm:text-center md:max-w-2xl md:mx-auto lg:col-span-6 lg:text-left">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-blue-50 text-blue-600 text-sm font-semibold mb-8 border border-blue-100">
                        <span class="relative flex h-2 w-2">
                          <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-uv-green-400 opacity-75"></span>
                          <span class="relative inline-flex rounded-full h-2 w-2 bg-uv-green-500"></span>
                        </span>
                        Inscriptions ouvertes 2026-2027
                    </div>
                    
                    <h1 class="text-5xl md:text-6xl font-extrabold tracking-tight text-slate-900 mb-6 leading-tight">
                        Sciences <span class="text-transparent bg-clip-text bg-gradient-to-r from-uv-green-600 to-uv-yellow-600">Informatiques</span><br/>
                        & Applications
                    </h1>
                    
                    <p class="mt-3 text-lg text-slate-600 sm:mt-5 sm:text-xl lg:text-lg xl:text-xl mb-8">
                        Façonnez le futur numérique avec la Licence de l'UVBF. Maîtrisez le développement logiciel, la sécurité des réseaux, l'intelligence artificielle et la gestion de projets informatiques complexes.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 sm:justify-center lg:justify-start">
                        <a href="{{ route('preinscriptions.create') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-slate-900 text-white font-semibold hover:bg-slate-800 transition transform hover:-translate-y-1 shadow-xl flex justify-center items-center gap-2">
                            Pré-inscription en ligne
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </a>
                        <a href="{{ route('public.formations') }}" class="w-full sm:w-auto px-8 py-4 rounded-full bg-white text-slate-700 font-semibold border-2 border-slate-200 hover:border-slate-300 hover:bg-slate-50 transition flex justify-center items-center gap-2">
                            Découvrir le programme
                        </a>
                    </div>
                </div>
                
                <div class="mt-12 relative sm:max-w-lg sm:mx-auto lg:mt-0 lg:max-w-none lg:mx-0 lg:col-span-6 lg:flex lg:items-center">
                    <div class="relative mx-auto w-full rounded-2xl shadow-2xl lg:max-w-md overflow-hidden">
                        <!-- Image récupérée depuis Unsplash pour symboliser le code et l'informatique -->
                        <img class="w-full h-full object-cover" src="https://images.unsplash.com/photo-1555066931-4365d14bab8c?q=80&w=1470&auto=format&fit=crop" alt="Programmation métier">
                        <div class="absolute inset-0 bg-gradient-to-tr from-blue-600/20 to-transparent mix-blend-multiply"></div>
                    </div>
                </div>
            </div>
        </div>
    <!-- Section Vidéo Promotionnelle -->
    <div class="bg-slate-50 py-16 sm:py-24">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl">Découvrez l'Informatique en Action</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-slate-500">Une vidéo inspirante sur le pouvoir du numérique et l'avenir de l'informatique au Burkina Faso.</p>
                <a href="https://www.youtube.com/channel/UCKZY8DjkR6X9HC-Z7VOHErQ" target="_blank" class="inline-flex items-center mt-4 px-6 py-2 bg-uv-green-600 text-white rounded-full font-semibold hover:bg-uv-green-700 transition">
                    Voir plus de vidéos sur notre chaîne YouTube
                    <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                </a>
            </div>
            
            <div class="max-w-4xl mx-auto">
                <div class="relative pb-[56.25%] h-0 overflow-hidden rounded-2xl shadow-2xl">
                    <iframe 
                        class="absolute top-0 left-0 w-full h-full" 
                        src="https://www.youtube.com/embed/ij6vhQc_lu0?rel=0" 
                        title="Vidéo promotionnelle UVBF" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <div class="mt-8 text-center">
                    <p class="text-slate-600 max-w-2xl mx-auto">
                        Découvrez la présentation officielle de l'Université Virtuelle du Burkina Faso et ses programmes en informatique.
                    </p>
                    <a href="https://www.youtube.com/watch?v=ij6vhQc_lu0" target="_blank" class="inline-flex items-center mt-4 px-6 py-3 bg-uv-green-600 text-white rounded-full font-semibold hover:bg-uv-green-700 transition">
                        Voir sur YouTube
                        <svg class="ml-2 w-5 h-5" fill="currentColor" viewBox="0 0 24 24"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"/></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <!-- Image 1 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition">
                    <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?q=80&w=1471&auto=format&fit=crop" alt="Étudiants en cours">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-semibold">Cours Interactifs</h3>
                        <p class="text-sm opacity-90">Apprentissage en ligne</p>
                    </div>
                </div>

                <!-- Image 2 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition">
                    <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1516321497487-e288fb19713f?q=80&w=1470&auto=format&fit=crop" alt="Bibliothèque numérique">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-semibold">Ressources Digitales</h3>
                        <p class="text-sm opacity-90">Bibliothèque 24/7</p>
                    </div>
                </div>

                <!-- Image 3 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition">
                    <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?q=80&w=1470&auto=format&fit=crop" alt="Projets étudiants">
                    <div class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1559136555-9303baea8ebd?q=80&w=1470&auto=format&fit=crop" alt="Projets étudiants">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-semibold">Projets Innovants</h3>
                        <p class="text-sm opacity-90">Développement logiciel</p>
                    </div>
                </div>

                <!-- Image 4 -->
                <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-xl transition">
                    <img class="w-full h-64 object-cover group-hover:scale-105 transition-transform duration-300" src="https://images.unsplash.com/photo-1552664730-d307ca884978?q=80&w=1470&auto=format&fit=crop" alt="Communauté étudiante">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    <div class="absolute bottom-4 left-4 text-white">
                        <h3 class="text-lg font-semibold">Communauté Active</h3>
                        <p class="text-sm opacity-90">Échanges & Partage</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Nouvelle section d'informations sur les Sciences Informatiques -->
    <div class="bg-white py-16 sm:py-24 hidden md:block">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-extrabold text-slate-900 tracking-tight sm:text-4xl">Au cœur de l'innovation numérique</h2>
                <p class="mt-4 max-w-2xl mx-auto text-xl text-slate-500">Un programme d'excellence conçu pour former les experts technologiques du Burkina Faso et de la sous-région.</p>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Carte 1 -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-uv-green-100 rounded-xl flex items-center justify-center text-uv-green-600 mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Génie Logiciel & Web</h3>
                    <p class="text-slate-600">Maîtrisez les langages modernes (Python, Java, PHP/Laravel, JavaScript) pour concevoir des applications web et mobiles performantes.</p>
                </div>

                <!-- Carte 2 -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-uv-yellow-100 rounded-xl flex items-center justify-center text-uv-yellow-600 mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Systèmes & Bases de données</h3>
                    <p class="text-slate-600">Apprenez à structurer, sécuriser et exploiter de grandes quantités de données avec SQL, NoSQL et l'administration réseau.</p>
                </div>

                <!-- Carte 3 -->
                <div class="bg-slate-50 rounded-2xl p-8 border border-slate-100 hover:shadow-lg transition">
                    <div class="w-14 h-14 bg-uv-red-100 rounded-xl flex items-center justify-center text-uv-red-600 mb-6">
                        <svg class="w-8 h-8" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Intelligence Artificielle</h3>
                    <p class="text-slate-600">Plongez dans les algorithmes du futur : Machine Learning, traitement de données, et automatisation des processus métier complexes.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
