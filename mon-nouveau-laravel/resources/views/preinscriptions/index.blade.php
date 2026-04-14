<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4">
            <h2 class="font-semibold text-xl text-gray-800">Dossiers de Préinscription</h2>
            <div class="flex flex-wrap items-center gap-4">
                <form method="GET" action="{{ route('preinscriptions.index') }}" class="flex shadow-sm rounded-lg">
                    <input type="text" name="search" value="{{ request('search') }}" placeholder="Chercher un nom, email..." class="rounded-l-lg border-gray-300 focus:border-blue-500 focus:ring-blue-500 text-sm">
                    <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 rounded-r-lg text-sm font-bold transition">Chercher</button>
                    @if(request('search'))
                        <a href="{{ route('preinscriptions.index') }}" class="ml-3 py-2 text-red-500 text-sm font-semibold hover:underline flex items-center">Effacer</a>
                    @endif
                </form>

                <a href="{{ route('preinscriptions.export') }}" target="_blank" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-lg shadow-sm font-bold flex items-center gap-2 transition">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    Télécharger Liste Globale (PDF)
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"><div class="p-6 text-gray-900 border-b border-gray-200">
        <table class="min-w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b-2 bg-gray-50">
                <tr><th class="px-6 py-4">Étudiant</th><th class="px-6 py-4">Contact</th><th class="px-6 py-4">Formation Voulue</th><th class="px-6 py-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($preinscriptions as $dossier)
                    <tr class="border-b hover:bg-gray-50">
                        <th class="px-6 py-4 font-medium">{{ $dossier->prenom }} {{ $dossier->nom }}<br><span class="text-xs text-blue-600 font-bold border rounded px-1">{{ $dossier->diplome }}</span><br><span class="text-xs text-gray-400 font-normal">Reçu le {{ $dossier->created_at->format('d/m/Y') }}</span></th>
                        <td class="px-6 py-4 text-gray-600">{{ $dossier->email }}<br>{{ $dossier->telephone }}</td>
                        <td class="px-6 py-4 font-bold text-blue-600">{{ $dossier->formation->titre ?? 'Inconnue' }}</td>
                        <td class="px-6 py-4 flex flex-col gap-2">
                            @if($dossier->fichier_joint)
                                <a href="{{ asset('storage/' . $dossier->fichier_joint) }}" target="_blank" class="px-3 py-1 bg-green-100 text-green-700 text-sm font-semibold rounded block text-center">Voir Fichier</a>
                            @endif
                            
                            <a href="{{ route('preinscriptions.print', $dossier) }}" target="_blank" class="px-3 py-1 bg-gray-100 text-gray-700 hover:bg-gray-200 text-sm font-semibold rounded block text-center border border-gray-300">
                                Imprimer PDF
                            </a>

                            <form id="delete-form-{{ $dossier->id }}" action="{{ route('preinscriptions.destroy', $dossier) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="button" onclick="confirmDelete(event, 'delete-form-{{ $dossier->id }}')" class="px-3 py-1 bg-red-100 font-semibold text-red-600 hover:bg-red-200 transition rounded text-sm w-full block text-center">
                                    Supprimer
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-6 py-8 text-center text-gray-500">Aucun dossier reçu.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div></div></div></div>
</x-app-layout>
