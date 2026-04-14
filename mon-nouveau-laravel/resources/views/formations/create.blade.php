<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ajouter une Formation') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-8 text-gray-900">
                    
                    <form action="{{ route('formations.store') }}" method="POST">
                        @csrf
                        
                        <!-- Titre -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Titre de la formation</label>
                            <input type="text" name="titre" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
                        </div>
                        
                        <div class="grid grid-cols-2 gap-6 mb-6">
                            <!-- Durée -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Durée (ex: 3 ans)</label>
                                <input type="text" name="duree" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                            <!-- Niveau Requis -->
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-2">Niveau Requis (ex: Baccalauréat)</label>
                                <input type="text" name="niveau_requis" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-6">
                            <label class="block text-sm font-medium text-gray-700 mb-2">Description complète</label>
                            <textarea name="description" rows="5" class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500" required></textarea>
                        </div>

                        <div class="flex justify-end gap-4 mt-8">
                            <a href="{{ route('formations.index') }}" class="px-4 py-2 border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 transition">Annuler</a>
                            <button type="submit" class="px-6 py-2 bg-blue-600 border border-transparent rounded-md text-white font-medium hover:bg-blue-700 transition">
                                Enregistrer la formation
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
