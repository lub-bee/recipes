<x-app-layout>
    <x-slot name="header">
        <div class='flex'>
            <h2 class="flex-1 font-semibold">
                {{ __('Ajouter une nouvelle recette') }}
            </h2>
            <div class='flex-none text-sky-600'>
                <x-subheader-link :url="route('receipe.index')" icon="fa-solid fa-list" label="Recettes" />
            </div>
        </div>
        
    </x-slot>

    <div class='m-6 p-4 bg-white rounded-xl'>
        <form action="{{ route("receipe.store") }}" method="POST" class="flex flex-col gap-4">
            @csrf
    
            <div class='flex'>
                <div class='w-60 leading-10 self-center'>
                    Nom de la recette
                </div>
                <div class="flex flex-col">
                    <div class='text-gray-500 self-end text-xs'>
                        0 / 60
                    </div>
                    <input name="name"
                        type="text"
                        placeholder="Ex. : Tartiflette traditionnelle"
                        class="@error('name') is-invalid @enderror"
                        value="{{ old("name") }}">
                    
                    @error('name')
                        <div class="text-xs text-red-500 self-end">{{ $message }}</div>
                    @enderror
                </div>
            </div>
    
            <div class='flex'>
                <div class='w-60'>
                    Durée de la préparation
                </div>
                <div class='flex flex-col'>
                    <input type="number" 
                        name="preparation_time"
                        placeholder="Ex. : 15"
                        class="@error('preparation_time') is-invalid @enderror"
                        value="{{ old("preparation_time") }}">
                    
                    @error('preparation_time')
                        <div class="text-xs text-red-500 self-end">{{ $message }}</div>
                    @enderror    
                </div>
                
            </div>
    
            <div class='flex'>  
                <div class='w-60'>
                    Durée de la cuisson
                </div>
                <div class='flex flex-col'>
                    <input type="number"
                        name="cooking_time"
                        placeholder="Cuisson en min"
                        class="@error('cooking_time') is-invalid @enderror"
                        value="{{ old("cooking_time") }}">
                    
                    @error('cooking_time')
                        <div class="text-xs text-red-500 self-end">{{ $message }}</div>
                    @enderror
                </div>
                
            </div>
            <div class='flex justify-center'>
                <button class="btn">Suivant <i class='fa-solid fa-caret-right'></i></button>    
            </div>
            
        </form>
    </div>
    
</x-app-layout>