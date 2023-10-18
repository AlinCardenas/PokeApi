<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Juegos Pokemon') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-4 gap-4">
                @foreach ($informationComplete as $index)
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-4">
                        <p class="font-bold">Game index: {{ $index[0] }}</p>
                        <p class="font-bold">Nombre: {{ $index[1] }}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
