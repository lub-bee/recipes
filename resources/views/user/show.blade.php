<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('User details') }}
        </h2>
    </x-slot>

    <x-single-user :user="$user"/>

    <div class=''>
        <h1>Recettes crées</h1>
        <div class=''>
            @forelse ($user->receipes as $receipe)
                <x-single-list-item-receipe :receipe="$receipe"/>
            @empty
                <div>Pas de recettes crées pour le moment...</div>
            @endforelse
        </div>
    </div>

    
</x-app-layout>