<x-layout>
    <x-slot name="headScripts">
        @vite(['resources/js/app.js', 'resources/css/app.css'])
        @livewireStyles
    </x-slot>
    <livewire:counter />
    <x-slot name="bodyScripts">
        @livewireScripts
    </x-slot>
</x-layout>
