<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Ajouter un Ingredient') }}
        </h2>
    </x-slot>

    <form action="{{ route("ingredient.store") }}" method="POST">
        @csrf

        <div class=''>
            <input name="name"
                type="text"
                placeholder="Nom de l'ingredient'"
                class="@error('name') is-invalid @enderror"
                value="{{ old("name") }}">
            
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=''>
            <select name="type">
                <option value="1">Légume & Fruit</option>
                <option value="2">Féculent & Céréale</option>
                <option value="3">Viande & Poisson</option>
                <option value="4">Lait & Produit laitier</option>
                <option value="5">Corp gras</option>
                <option value="6">Sucre</option>
                <option value="7">Fruit de mer</option>
                <option value="8">Épice</option>
            </select>
        </div>

        <button type="submit">Enregistrer</button>

    </form>

</x-app-layout>