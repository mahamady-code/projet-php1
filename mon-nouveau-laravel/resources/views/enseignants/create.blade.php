<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800">Ajouter un Enseignant</h2></x-slot>
    <div class="py-12"><div class="max-w-4xl mx-auto sm:px-6 lg:px-8"><div class="bg-white shadow-sm sm:rounded-lg"><div class="p-8 text-gray-900">
        <form action="{{ route('enseignants.store') }}" method="POST">@csrf
            <div class="grid grid-cols-2 gap-6 mb-6">
                <div><label class="block text-sm font-medium text-gray-700 mb-2">Prénom</label><input type="text" name="prenom" required class="w-full rounded border-gray-300"></div>
                <div><label class="block text-sm font-medium text-gray-700 mb-2">Nom</label><input type="text" name="nom" required class="w-full rounded border-gray-300"></div>
            </div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Spécialité (ex: Sécurité, Web)</label><input type="text" name="specialite" required class="w-full rounded border-gray-300"></div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Email pro</label><input type="email" name="email" class="w-full rounded border-gray-300"></div>
            <div class="flex justify-end gap-4"><a href="{{ route('enseignants.index') }}" class="px-4 py-2 border rounded-md">Annuler</a><button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Sauvegarder</button></div>
        </form>
    </div></div></div></div>
</x-app-layout>
