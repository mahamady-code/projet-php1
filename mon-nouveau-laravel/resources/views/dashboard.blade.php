<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight animate-fade-in">
            {{ __('Tableau de bord - UVBF Administratif') }}
        </h2>
    </x-slot>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }
        @keyframes pulse-glow {
            0%, 100% { box-shadow: 0 0 0 0 rgba(59, 130, 246, 0.7); }
            50% { box-shadow: 0 0 0 10px rgba(59, 130, 246, 0); }
        }
        .animate-fade-in {
            animation: fadeIn 0.6s ease-in;
        }
        .animate-slide-up {
            animation: slideUp 0.6s ease-out;
        }
        .animate-slide-up-1 {
            animation: slideUp 0.6s ease-out 0.1s backwards;
        }
        .animate-slide-up-2 {
            animation: slideUp 0.6s ease-out 0.2s backwards;
        }
        .animate-slide-up-3 {
            animation: slideUp 0.6s ease-out 0.3s backwards;
        }
        .animate-slide-up-4 {
            animation: slideUp 0.6s ease-out 0.4s backwards;
        }
        .animate-slide-up-5 {
            animation: slideUp 0.6s ease-out 0.5s backwards;
        }
        .animate-scale-in {
            animation: scaleIn 0.5s ease-out;
        }
        .animate-pulse-glow {
            animation: pulse-glow 2s infinite;
        }
        .stat-card {
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .stat-card:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }
        .chart-container {
            transition: all 0.5s ease;
        }
        .hero-section {
            animation: slideUp 0.8s ease-out;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-8 rounded-3xl overflow-hidden shadow-2xl bg-gradient-to-r from-sky-600 via-cyan-600 to-blue-700 text-white hero-section">
                <div class="grid gap-8 lg:grid-cols-2 items-center px-6 py-10 sm:px-10">
                    <div>
                        <span class="inline-flex items-center rounded-full bg-white/20 px-4 py-1 text-xs font-semibold uppercase tracking-[0.2em]">Tableau de bord UVBF</span>
                        <h1 class="mt-5 text-3xl sm:text-4xl font-extrabold tracking-tight">Pilotage des formations & des candidatures</h1>
                        <p class="mt-4 max-w-2xl text-sky-100 leading-7">Suivez en temps réel les statistiques de votre campus, gérez les préinscriptions et prenez des décisions rapides grâce à une interface claire.</p>
                        <div class="mt-6 flex flex-col sm:flex-row gap-3">
                            <a href="#" class="inline-flex items-center justify-center rounded-2xl bg-white/20 px-5 py-3 text-sm font-semibold text-white ring-1 ring-white/20 hover:bg-white/30">Voir les préinscriptions</a>
                            <a href="#" class="inline-flex items-center justify-center rounded-2xl bg-white/10 px-5 py-3 text-sm font-semibold text-sky-100 ring-1 ring-white/20 hover:bg-white/20">Gérer les actualités</a>
                        </div>
                    </div>
                    <div class="relative flex justify-center animate-scale-in">
                        <img src="{{ asset('logo.png') }}" alt="Logo UVBF" class="w-64 rounded-3xl border border-white/30 shadow-2xl bg-white/5 transition-transform duration-500 hover:scale-110" />
                        <div class="pointer-events-none absolute -right-10 top-6 hidden lg:block h-48 w-48 rounded-full bg-white/10 blur-3xl animate-pulse"></div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                <!-- Formations -->
                <div class="bg-white rounded-xl shadow-sm border-b-4 border-blue-500 overflow-hidden p-6 stat-card animate-slide-up-1">
                    <div class="text-sm font-semibold text-gray-500 uppercase">Formations</div>
                    <div class="mt-2 text-4xl font-extrabold text-gray-900">{{ $stats['formations'] }}</div>
                </div>

                <!-- Enseignants -->
                <div class="bg-white rounded-xl shadow-sm border-b-4 border-indigo-500 overflow-hidden p-6 stat-card animate-slide-up-2">
                    <div class="text-sm font-semibold text-gray-500 uppercase">Enseignants</div>
                    <div class="mt-2 text-4xl font-extrabold text-gray-900">{{ $stats['enseignants'] }}</div>
                </div>

                <!-- Actualités -->
                <div class="bg-white rounded-xl shadow-sm border-b-4 border-emerald-500 overflow-hidden p-6 stat-card animate-slide-up-3">
                    <div class="text-sm font-semibold text-gray-500 uppercase">Actualités</div>
                    <div class="mt-2 text-4xl font-extrabold text-gray-900">{{ $stats['actualites'] }}</div>
                </div>

                <!-- Débouchés -->
                <div class="bg-white rounded-xl shadow-sm border-b-4 border-amber-500 overflow-hidden p-6 stat-card animate-slide-up-4">
                    <div class="text-sm font-semibold text-gray-500 uppercase">Débouchés</div>
                    <div class="mt-2 text-4xl font-extrabold text-gray-900">{{ $stats['debouches'] }}</div>
                </div>

                <!-- Préinscriptions -->
                <div class="bg-white rounded-xl shadow-sm border-b-4 border-rose-500 overflow-hidden p-6 stat-card animate-slide-up-5 animate-pulse-glow">
                    <div class="text-sm font-semibold text-gray-500 uppercase">Préinscrits</div>
                    <div class="mt-2 text-4xl font-extrabold text-rose-600">{{ $stats['preinscriptions'] }}</div>
                </div>
            </div>

            <div class="mt-8 bg-white overflow-hidden shadow-sm sm:rounded-xl animate-slide-up">
                <div class="p-6 text-gray-900 border-b border-gray-100 animate-fade-in">
                    <h3 class="text-lg font-bold mb-2">Bienvenue {{ Auth::user()->name }} 👋</h3>
                    <p class="text-gray-600">Vous êtes connecté au système de gestion de votre site vitrine de l'UVBF. Utilisez le menu supérieur pour ajouter ou modifier des informations destinées au site public.</p>
                </div>
                
                <div class="p-8 bg-gray-50 flex gap-8">
                    <!-- Graphique -->
                    <div class="bg-white p-6 rounded-2xl shadow-sm border border-gray-200 w-full lg:w-1/2 flex flex-col items-center chart-container">
                        <h4 class="text-gray-800 font-bold mb-6 w-full text-left">Répartition des Préinscriptions</h4>
                        
                        @if(count($chartValues) > 0)
                            <div class="w-64 h-64">
                                <canvas id="preinscriptionsChart"></canvas>
                            </div>
                        @else
                            <div class="flex items-center justify-center h-full text-gray-400 italic">
                                Aucune préinscription pour l'instant.
                            </div>
                        @endif
                    </div>
                    
                    <!-- Espace pour de futurs widgets -->
                    <div class="hidden lg:block w-1/2 bg-blue-50 rounded-2xl border border-blue-100 p-8 flex flex-col justify-center items-center text-center">
                        <div class="w-16 h-16 bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        <h4 class="text-blue-900 font-bold text-lg mb-2">Système 100% Opérationnel</h4>
                        <p class="text-blue-700">Votre plateforme UVBF est prête à accueillir les étudiants. Utilisez l'onglet "Préinscriptions" en haut pour gérer les dossiers envoyés.</p>
                    </div>
                </div>
            </div>
            
            <!-- Injection du script Chart.js -->
            @if(count($chartValues) > 0)
                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const ctx = document.getElementById('preinscriptionsChart').getContext('2d');
                        new Chart(ctx, {
                            type: 'doughnut',
                            data: {
                                labels: {!! json_encode($chartLabels) !!},
                                datasets: [{
                                    data: {!! json_encode($chartValues) !!},
                                    backgroundColor: [
                                        '#10b981', // emerald
                                        '#3b82f6', // blue
                                        '#f59e0b', // amber
                                        '#8b5cf6', // purple
                                        '#f43f5e'  // rose
                                    ],
                                    borderWidth: 0,
                                    hoverOffset: 4
                                }]
                            },
                            options: {
                                responsive: true,
                                maintainAspectRatio: false,
                                plugins: {
                                    legend: {
                                        position: 'bottom',
                                        labels: {
                                            padding: 20,
                                            usePointStyle: true,
                                        }
                                    }
                                },
                                cutout: '70%'
                            }
                        });
                    });
                </script>
            @endif
        </div>
    </div>
</x-app-layout>
