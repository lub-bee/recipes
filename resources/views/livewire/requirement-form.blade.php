<form wire:submit.prevent="submit">

    {{-- @livewire('search-ingredient') --}}
    <div class="flex flex-col sm:flex-row gap-2 mb-2">
        <div class='flex-1'>
            
            <div class='text-sm text-gray-500'>
                Recette
            </div>

            <input type="hidden" wire:model="receipe_id">

            <div class=''>
                <input type="text" wire:model="ingredientTerm" placeholder="Ingredient" class="w-full">
                @error('ingredient')
                    <div class="error">{{ $message }}</div>
                @enderror      
            </div>
        </div>
            
        <div class='flex-1'>
            <div class='text-sm text-gray-500'>
                Quantité
            </div>

            <div class=''>
                <input type="number" wire:model="quantity" placeholder="Quantité" class="w-full">
                @error('quantity')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>
        </div>
            
        <div class='flex-1'>
            <div class='text-sm text-gray-500'>
                Unité
            </div>

            <div class=''>
                <select name="unite_id" wire:model="unite_id" class="w-full">
                    @foreach ($unites as $unite)
                        <option value="{{ $unite->id }}" @selected(old('unite_id') == $unite->id)>
                            ({{ $unite->abbr }}) {{ $unite->label }} 
                        </option>
                    @endforeach
                </select>
                @error('unite_id')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <button class="btn h-10 self-end" type="submit">Ajouter ingredient</button>

    </div>
    <div class="flex items-start">
    
        <div class="bg-gray-400 p-2 rounded-xl max-h-[200px] text-black flex flex-col">
            <ul class="flex-1 overflow-x-scroll flex flex-wrap">
                @forelse ($ingredients as $ingredient)
                    <li wire:click="updateIngredient({{$ingredient->id}})"
                        class="hover:cursor-pointer w-40 max-w-[10rem]">{{ $ingredient->name }}</li>
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
