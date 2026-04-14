<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Gestion des Formations') }}
            </h2>
            <a href="{{ route('formations.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">
                + Nouvelle Formation
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            
            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full text-left text-sm whitespace-nowrap">
                            <thead class="uppercase tracking-wider border-b-2 border-gray-200">
                                <tr>
                                    <th scope="col" class="px-6 py-4">Titre</th>
                                    <th scope="col" class="px-6 py-4">Niveau</th>
                                    <th scope="col" class="px-6 py-4">Durée</th>
                                    <th scope="col" class="px-6 py-4 text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($formations as $formation)
                                    <tr class="border-b border-gray-100 hover:bg-gray-50">
                                        <th scope="row" class="px-6 py-4 font-medium text-gray-900">{{ $formation->titre }}</th>
                                        <td class="px-6 py-4">{{ $formation->niveau_requis ?? '-' }}</td>
                                        <td class="px-6 py-4">{{ $formation->duree ?? '-' }}</td>
                                        <td class="px-6 py-4 text-center whitespace-nowrap">
                                            <form action="{{ route('formations.destroy', $formation) }}" method="POST" class="inline">
                                                @csrf @method('DELETE')
                                                <button type="submit" onclick="return confirm('Êtes-vous sûr ?')" class="text-red-500 hover:text-red-700 font-medium">
                                                    Supprimer
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-8 text-center text-gray-500">Aucune formation créée pour l'instant.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
