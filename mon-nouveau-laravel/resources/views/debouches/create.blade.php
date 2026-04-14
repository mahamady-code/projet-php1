<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800">Ajouter un Débouché / Profil Formé</h2></x-slot>
    <div class="py-12"><div class="max-w-4xl mx-auto sm:px-6 lg:px-8"><div class="bg-white shadow-sm sm:rounded-lg"><div class="p-8 text-gray-900">
        <form action="{{ route('debouches.store') }}" method="POST">@csrf
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Titre du métier (ex: Développeur Web)</label><input type="text" name="titre" required class="w-full rounded border-gray-300"></div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Description des tâches attendues</label><textarea name="description" rows="4" required class="w-full rounded border-gray-300"></textarea></div>
            <div class="flex justify-end gap-4"><a href="{{ route('debouches.index') }}" class="px-4 py-2 border rounded-md">Annuler</a><button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Sauvegarder</button></div>
        </form>
    </div></div></div></div>
</x-app-layout>
