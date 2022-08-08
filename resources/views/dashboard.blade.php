<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class='m-2 my-4 p-2 sm:m-6 sm:p-6 sm:py-4 bg-white rounded shadow flex flex-col gap-2 transition-all'>
        
        <div class='grid grid-cols-3 md:flex gap-1'>
            <h1 class="col-span-full md:flex-1 text-2xl text-coral">Recettes</h1>
            <a href="{{ route("receipe.create") }}" class="btn"><i class='fa-solid fa-circle-plus'></i> Ajouter</a>
            <a href="{{ route("receipe.index") }}" class="btn"><i class='fa-solid fa-list'></i> Liste</a>
            <a href="" class="btn"><i class='fa-solid fa-magnifying-glass'></i> Chercher</a>
        </div>
        <div class='text-sm text-coral-400'>
            {{ $receipes->count() }} recettes entrées.
        </div>
        <div class='border border-slate-700 rounded-xl overflow-hidden'>
            <h2 class="bg-sky-700 text-white pl-4">Dernier ajouts</h2>
            <div class='flex flex-col p-1 sm:p-4 sm:py-2 divide-y'>
                @foreach ($last_receipes as $receipe)
                    <x-single-list-item-receipe :receipe="$receipe"/>    
                @endforeach
            </div>
        </div>
    </div>

    <div class='m-2 my-4 p-2 sm:m-6 sm:p-6 sm:py-4  bg-white rounded shadow flex flex-col gap-2'>
        
        <div class='grid grid-cols-3 md:flex gap-1'>
            <h1 class="col-span-full md:flex-1 text-2xl text-coral">Ingredients</h1>
            <a href="{{ route("ingredient.create") }}" class="btn"><i class='fa-solid fa-circle-plus'></i> Ajouter</a>
            <a href="{{ route("ingredient.index") }}" class="btn"><i class='fa-solid fa-list'></i> Liste</a>
            <a href="" class="btn"><i class='fa-solid fa-magnifying-glass'></i> Chercher</a>
        </div>
        <div class='text-sm text-coral-400'>
            {{ $ingredients->count() }} ingrédients entrés.
        </div>
        <div class='border border-slate-700 rounded-xl overflow-hidden'>
            <h2 class="bg-sky-700 text-white pl-4">Dernier ajouts</h2>
            <div class='grid grid-cols-2 p-4 py-2 gap-1'>
                @foreach ($last_ingredients as $ingredient)
                    <x-single-list-item-ingredient :ingredient="$ingredient"/>    
                @endforeach
            </div>
        </div>
    </div>
    
    <div class='m-2 my-4 p-2 sm:m-6 sm:p-6 sm:py-4 bg-white rounded shadow flex flex-col gap-2'>
        <div class='grid grid-cols-3 sm:flex gap-1'>
            <h1 class="col-span-full sm:flex-1 text-2xl text-coral">Utilisateurs</h1>
            <a href="{{ route("user.create") }}" class="btn"><i class='fa-solid fa-circle-plus'></i> Ajouter</a>
            <a href="{{ route("user.index") }}" class="btn"><i class='fa-solid fa-list'></i> Liste</a>
            <a href="" class="btn"><i class='fa-solid fa-list'></i> Chercher</a>
        </div>
        <div class='text-sm text-coral-400'>
            {{ $users->count() }} inscrits.
        </div>
        <div class='border border-slate-700 rounded-xl overflow-hidden'>
            <h2 class="bg-sky-700 text-white pl-4">Nouveaux inscrits</h2>
            <div class='grid grid-cols-2 p-4 py-2'>
                @foreach ($last_users as $user)
                    <x-single-list-item-user :user="$user"/>    
                @endforeach
            </div>
        </div>
    </div>

    <div class='m-2 my-4 p-2 sm:m-6 sm:p-6 sm:py-4  bg-white rounded shadow'>
        <div class='grid grid-cols-2 sm:flex gap-1'>
            <h1 class="col-span-full sm:flex-1 text-2xl text-coral">Unités de Mesures</h1>
            <a href="{{ route("unite.create") }}" class="btn"><i class='fa-solid fa-circle-plus'></i> Ajouter</a>
            <a href="{{ route("unite.index") }}" class="btn"><i class='fa-solid fa-list'></i> Liste</a>
        </div>
    </div>

    
    
</x-app-layout>
