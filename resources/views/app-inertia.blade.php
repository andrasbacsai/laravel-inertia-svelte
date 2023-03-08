<x-layout>
    <x-slot name="headScripts">
        @vite(['resources/js/app-inertia.js', 'resources/css/app.css'])
        @inertiaHead
    </x-slot>
    <x-slot name="bodyScripts">
        @inertia
    </x-slot>
</x-layout>
