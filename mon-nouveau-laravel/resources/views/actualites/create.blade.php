<x-app-layout>
    <x-slot name="header"><h2 class="font-semibold text-xl text-gray-800">Publier une Actualité</h2></x-slot>
    <div class="py-12"><div class="max-w-4xl mx-auto sm:px-6 lg:px-8"><div class="bg-white shadow-sm sm:rounded-lg"><div class="p-8 text-gray-900">
        <form action="{{ route('actualites.store') }}" method="POST">@csrf
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Titre de l'événement</label><input type="text" name="titre" required class="w-full rounded border-gray-300"></div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Date (Optionnel)</label><input type="date" name="date_publication" class="w-full rounded border-gray-300"></div>
            <div class="mb-6"><label class="block text-sm font-medium text-gray-700 mb-2">Contenu (Texte intégral)</label><textarea id="editor" name="contenu" rows="6" class="w-full rounded border-gray-300"></textarea></div>
            <div class="flex justify-end gap-4"><a href="{{ route('actualites.index') }}" class="px-4 py-2 border rounded-md">Annuler</a><button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Publier</button></div>
        </form>
    </div></div></div></div>

    <!-- CKEditor 5 Script -->
    <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', '|', 'undo', 'redo' ]
                })
                .catch(error => {
                    console.error(error);
                });
        });
    </script>
</x-app-layout>
