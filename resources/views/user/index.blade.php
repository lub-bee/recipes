<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            {{ __('User') }}
        </h2>
    </x-slot>

    <div class=''>
        @forelse ($users as $user)
            <x-single-list-item-user :user="$user"/>
        @empty
            
        @endforelse
    </div>

</x-app-layout>