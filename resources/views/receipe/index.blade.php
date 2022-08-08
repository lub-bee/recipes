<x-app-layout>
    <x-slot name="header">
        <div class='flex items-center'>
            <h2 class="flex-1 font-semibold text-xl">
                {{ __('Toutes nos recettes') }}
            </h2>
            <div class='flex-none flex gap-2'>
                <x-subheader-link label="{{ __('Favoris') }}" icon="fa-solid fa-book-bookmark" url="{{ route('favorite.index') }}"></x-subheader-link>
                <x-subheader-link label="{{ __('Liste de courses') }}" icon="fa-solid fa-list-check" url=""></x-subheader-link>
                <x-subheader-link label="{{ __('Planning') }}" icon="fa-regular fa-calendar" url=""></x-subheader-link>
            </div>
        </div>
    </x-slot>

    <div class='m-6 border-2 rounded-full border-coral p-2 px-6 shadow bg-white'>
        <i class='fa-solid fa-magnifying-glass'></i> Search <i class='fa-solid fa-sliders'></i>
    </div>

    <div class="m-6 bg-white p-4 px-6 rounded shadow divide-y">
        @if($receipes)
            <div class='flex gap-2 text-coral text-xs'>
                <div class='flex-1'></div>
                <div class='flex-none w-12 sm:w-20' title="Difficulté de la préparation">
                    <i class='fa-regular fa-star'></i>
                </div>
                <div class='flex-none w-12 sm:w-20 text-right pr-6' title="Durée total de la preparation">
                    <i class='fa-regular fa-clock'></i>
                </div>
                <div class='flex-none w-16 sm:w-48' title="Idée de présentation">
                    <i class='fa-regular fa-images'></i>
                </div>
            </div>
        @endif
        @forelse ($receipes as $receipe)
            <x-single-list-item-receipe :receipe="$receipe"/>
        @empty
            Pas de recette enregistrée :/
        @endforelse
    </div>
</x-app-layout>