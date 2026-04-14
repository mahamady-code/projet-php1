<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            @isset($header)
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
        
        <!-- SweetAlert2 Scripts -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        
        @if(session('success'))
            <script>
                document.addEventListener('DOMContentLoaded', function() {
                    Swal.fire({
                        icon: 'success',
                        title: 'Super !',
                        text: "{{ session('success') }}",
                        timer: 3000,
                        showConfirmButton: false,
                        toast: true,
                        position: 'top-end'
                    });
                });
            </script>
        @endif
        
        <!-- Global Delete Confirmation -->
        <script>
            function confirmDelete(event, formId) {
                event.preventDefault(); // Empêche l'envoi immédiat
                
                Swal.fire({
                    title: 'Êtes-vous sûr ?',
                    text: "Cette action est définitive et supprimera l'élément de la base de données.",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#ef4444', // red-500
                    cancelButtonColor: '#64748b',  // slate-500
                    confirmButtonText: 'Oui, archiver !',
                    cancelButtonText: 'Annuler',
                    backdrop: `rgba(0,0,123,0.4)`
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById(formId).submit();
                    }
                })
            }
        </script>
    </body>
</html>
