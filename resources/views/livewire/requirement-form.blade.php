<form wire:submit.prevent="submit">

    {{-- @livewire('search-ingredient') --}}
    
    <div class=''>
        
        <input type="hidden" wire:model="receipe_id">

        <input type="text"  wire:model="ingredientTerm" placeholder="Ingredient">
        @error('ingredient')
            <div class="error">{{ $message }}</div>
        @enderror
        
        
        <input type="number" wire:model="quantity" placeholder="Quantité">
        @error('quantity')
            <div class="error">{{ $message }}</div>
        @enderror
        
        
        <select wire:model="unite_id">
            @foreach ($unites as $unite)
                <option value="{{ $unite->id }}" @selected(old('unite_id') == $unite->id)>
                    ({{ $unite->abbr }}) {{ $unite->label }} 
                </option>
            @endforeach
        </select>
        @error('unite_id')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit">Ajouter ingredient</button>

    </div>
    <div class="flex items-start">
    
        <div class="bg-gray-400 p-2 rounded-xl max-h-[200px] text-black flex flex-col">
            <ul class="flex-1 overflow-x-scroll grid grid-cols-3">
                @forelse ($ingredients as $ingredient)
                    <li wire:click="updateIngredient({{$ingredient->id}})"
                        class="hover:cursor-pointer">{{ $ingredient->name }}</li>
                @empty
                    <li>Aucun ingredient trouvé pour la recherche</li>
                @endforelse
                <a href="{{ route("ingredient.create") }}">Ajouter Nouvel Ingredient</a>
            </ul>
            <div class='flex-none text-gray-600 text-xs flex justify-between'>
                <div>{{ count($ingredients) }} ingredient(s) trouvé(s)</div>
            </div>
        </div>
    </div>

</form>
