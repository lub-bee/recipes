<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Creation d\'un utilisateur') }}
        </h2>
    </x-slot>
    
    <form action="{{ route("user.store") }}" method="post">
        @csrf
        
        <input type="text" name="name" placeholder="Nom">
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror

        <input type="text" name="email" placeholder="Email">
        @error('email')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        
        <button type="submit">Enregistrer</button>

    </form>


</x-app-layout>