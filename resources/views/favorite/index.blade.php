<x-app-layout>

    <x-slot name="header">
        <div class='flex items-center'>
            <h2 class="flex-1"><i class='fa-solid fa-book-bookmark'></i> Recettes favorites</h2>
            <x-subheader-link label="{{ __('Liste de recettes') }}" icon="fa-solid fa-list" url="{{ route('receipe.index') }}"></x-subheader-link>
        </div>
    </x-slot>

    <div class='m-6 bg-white p-4 rounded-xl divide-y'>
        @forelse (Auth::user()->favorites as $favorite)

            <div class=''>
                <div class='text-xs text-gray-500 text-right'>
                    Ajouté le {{ $favorite->created_at }}    
                </div>
                <x-single-list-item-receipe :receipe="$favorite->receipe"></x-single-list-item-receipe>
            </div>

            
        @empty
            
        @endforelse
    </div>
</x-app-layout>