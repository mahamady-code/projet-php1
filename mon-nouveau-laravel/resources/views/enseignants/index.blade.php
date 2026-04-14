<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gestion des Enseignants</h2>
            <a href="{{ route('enseignants.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">+ Ajouter un profil</a>
        </div>
    </x-slot>

    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"><div class="p-6 text-gray-900 border-b border-gray-200">
        <table class="min-w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b-2 bg-gray-50">
                <tr><th class="px-6 py-4">Nom Complet</th><th class="px-6 py-4">Email</th><th class="px-6 py-4">Spécialité</th><th class="px-6 py-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($enseignants as $enseignant)
                    <tr class="border-b hover:bg-gray-50">
                        <th class="px-6 py-4 font-medium">{{ $enseignant->prenom }} {{ $enseignant->nom }}</th>
                        <td class="px-6 py-4 text-gray-500">{{ $enseignant->email ?? 'Non renseigné' }}</td>
                        <td class="px-6 py-4 text-blue-600 font-semibold">{{ $enseignant->specialite }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('enseignants.destroy', $enseignant) }}" method="POST">@csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('Sûr ?')" class="text-red-500 hover:text-red-700">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-6 py-8 text-center text-gray-500">Aucun enseignant.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div></div></div></div>
</x-app-layout>
