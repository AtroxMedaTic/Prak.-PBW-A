<x-app-layout>
    @slot('title', 'Home')

    <x-slot name="header">
        <h2 class="font-semibold text-xl leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <x-container>
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-black">
                {{ __("Homepage") }}
            </div>
        </div>
    </x-container>
</x-app-layout>