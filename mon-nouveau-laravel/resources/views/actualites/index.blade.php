<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Gestion des Actualités</h2>
            <a href="{{ route('actualites.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded-md shadow hover:bg-blue-700 transition">+ Publier une actualité</a>
        </div>
    </x-slot>

    <div class="py-12"><div class="max-w-7xl mx-auto sm:px-6 lg:px-8"><div class="bg-white overflow-hidden shadow-sm sm:rounded-lg"><div class="p-6 text-gray-900 border-b border-gray-200">
        <table class="min-w-full text-left text-sm whitespace-nowrap">
            <thead class="uppercase tracking-wider border-b-2 bg-gray-50">
                <tr><th class="px-6 py-4">Titre</th><th class="px-6 py-4">Date publication</th><th class="px-6 py-4">Actions</th></tr>
            </thead>
            <tbody>
                @forelse($actualites as $actu)
                    <tr class="border-b hover:bg-gray-50">
                        <th class="px-6 py-4 font-medium">{{ $actu->titre }}</th>
                        <td class="px-6 py-4 text-gray-500">{{ $actu->date_publication ?? $actu->created_at->format('Y-m-d') }}</td>
                        <td class="px-6 py-4">
                            <form action="{{ route('actualites.destroy', $actu) }}" method="POST">@csrf @method('DELETE')
                                <button type="submit" onclick="return confirm('Sûr ?')" class="text-red-500 hover:text-red-700">Supprimer</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4" class="px-6 py-8 text-center text-gray-500">Aucune actualité.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div></div></div></div>
</x-app-layout>
