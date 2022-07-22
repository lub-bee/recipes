<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Nouvelle recette') }}
        </h2>
    </x-slot>
    
    <form action="{{ route("receipe.store") }}" method="POST">
        @csrf

        <div class=''>
            <input name="name"
                type="text"
                placeholder="Nom de la recette"
                class="@error('name') is-invalid @enderror"
                value="{{ old("name") }}">
            
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=''>
            <input type="number" 
                name="preparation_time"
                placeholder="Preparation en min"
                class="@error('preparation_time') is-invalid @enderror"
                value="{{ old("preparation_time") }}">
            
            @error('preparation_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class=''>  
            <input type="number"
                name="cooking_time"
                placeholder="Cuisson en min"
                class="@error('cooking_time') is-invalid @enderror"
                value="{{ old("cooking_time") }}">
            
            @error('cooking_time')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button>Suivant</button>
    </form>
</x-app-layout>