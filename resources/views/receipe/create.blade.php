<x-app-layout>
    <x-slot name="header">
        <div class='flex'>
            <h2 class="flex-1 font-semibold">
                {{ __('Ajouter une nouvelle recette') }}
            </h2>
            <div class='flex-none text-sky-600'>
                <a href="{{ route("receipe.index") }}"><i class='fa-solid fa-list'></i> Recettes</a>
            </div>
        </div>
        
    </x-slot>

    <div class='m-6 p-4 bg-white rounded-xl'>
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
    </div>
    
</x-app-layout>