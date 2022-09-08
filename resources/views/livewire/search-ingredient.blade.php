<div class="flex items-start">
    <input type="text" wire:model="searchTerms" />

    <div class="bg-gray-400 p-2 rounded-xl max-h-[200px] text-black flex flex-col">
        <ul class="flex-1 overflow-x-scroll flex w-20">
            @forelse ($ingredients as $ingredient)
                <li wire:click="$emit('postAdded')">{{ $ingredient->name }}</li>
            @empty
                <li>
                    Aucun ingredient trouvé pour la recherche
                    <a href="{{ route("ingredient.create") }}">Ajouter Nouvel Ingredient</a>
                </li>
            @endforelse
        </ul>
        <div class='flex-none text-gray-600 text-xs flex justify-between'>
            <div>{{ count($ingredients) }} ingredient(s) trouvé(s)</div>
        </div>
    </div>
</div>
