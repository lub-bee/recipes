<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Ingredient : ') }} {{ $ingredient->name }}
        </h2>
    </x-slot>

    <h1 class='text-3xl'>
        Recettes
    </h1>
    <div class=''>
        @forelse ($ingredient->receipes as $receipe)
            <x-single-list-item-receipe :receipe="$receipe"/>
        @empty
            
        @endforelse
    </div>

    <a href="{{ route("ingredient.index") }}">Retour a la liste</a>
</x-app-layout>