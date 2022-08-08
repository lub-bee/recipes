<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Modifier les ingredient de la recette') }} {{ $receipe->name }}
        </h2>
    </x-slot>

    <h1>Modification de la recette</h1>
    <x-single-receipe :receipe="$receipe" />

    <h1>Modifier la recette</h1>
    <form action="{{ route("receipe.update",$receipe->id) }}" method="post">
        @csrf
        @method("put")

        <input type="text" name="name" placeholder="Nom" value="{{ old("name", $receipe->name) }}">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="number" name="preparation_time" placeholder="Temps de Preparation" value="{{ old("preparation_time", $receipe->preparation_time) }}">
        @error('preparation_time')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="number" name="cooking_time" placeholder="Temps de cuisson" value="{{ old("cooking_time",$receipe->cooking_time) }}">
        @error('cooking_time')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="number" name="difficulty" placeholder="Difficulté" value="{{ old("difficulty",$receipe->difficulty) }}">
        @error('difficulty')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <button type="submit">Enregistrer</button>
    </form>

    <h1>Liste d'ingredients</h1>
    @forelse ($receipe->requirements as $requirement)
        <div class='flex'>
            <x-single-list-item-requirement :requirement="$requirement" :deletable="true"/>
        </div>
    @empty
        <div class=''>
            Aucun ingredient enregistré pour le moment.
        </div>
    @endforelse

    <h1>Ajouter un ingredient</h1>
    @livewire('requirement-form',["receipe_id"=>$receipe->id])
    {{-- <form action="{{ route("receipe.store_requirement", $receipe->id) }}" method="post">
        @csrf

        @livewire('search-ingredient')
        
        <input type="text" name="ingredient" placeholder="Ingredient" value="{{ old("ingredient") }}">
        @error('ingredient')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        
        <input type="number" name="quantity" placeholder="Quantité">
        @error('quantity')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        
        <select name="unite_id">
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
    </form> --}}

    <h1>Preparation</h1>
    {{-- @livewire("step-list",["receipe_id"=>$receipe->id]) --}}
    @forelse ($receipe->steps as $step)
        <x-single-list-item-step :step="$step" :deletable="true"/>
    @empty
        <div class=''>
            Aucun étape enregistrée pour le moment.
        </div>
    @endforelse

    <h1>Ajouter une etape</h1>
    <form action="{{ route("receipe.store_step", $receipe->id) }}" method="post">
        @csrf
        
        <input type="number" name="order" placeholder="Order" value="{{ old("order",count($receipe->steps) +1) }}">
        @error('order')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <textarea name="description" placeholder="Description de l'etape">{{ old("description") }}</textarea>
        @error('description')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <input type="hidden" name="receipe_id" value="{{ $receipe->id }}">
        
        <button type="submit">Ajouter l'étape</button>
    </form>

    <h1>Supprimer la Recette</h1>
    <form method="post" action="{{ route("receipe.destroy",$receipe->id) }}">
        @csrf
        @method("delete")

        <input type="hidden" name="receipe_id" value="{{ $receipe->id }}">
        <button type="submit">Confirmer Suppression</button>
    </form>

    <a href="{{ route("receipe.index") }}">Retour a la liste</a>
    <a href="{{ route("receipe.show",$receipe->id) }}">Retour a la recette</a>



</x-app-layout>