<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Liste d\'ingredients') }}
        </h2>
    </x-slot>

    <nav>
        <a href="{{ route("ingredient.create") }}">Nouvel Ingredient</a>
    </nav>

    <div class="grid grid-cols-5 gap-x-4">
    @foreach($ingredients as $ingredient)
        <a href="{{ route("ingredient.show",$ingredient->id) }}" class='hover:text-slate-400 hover:bg-neutral-700'>
            <div class="flex justify-between items-center">
                <div>{{ ucfirst($ingredient->name) }}</div>
                <div class="text-xs">({{ count($ingredient->receipes) }} recettes)</div>
            </div>
        </a>
    @endforeach
    </div>
</x-app-layout>