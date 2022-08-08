<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-400 leading-tight">
            {{ __('Liste d\'unités') }}
        </h2>
    </x-slot>

    @forelse ($unites as $unite)
        <div class='flex gap-4'>
            <div class="w-20">{{ $unite->abbr }}</div>
            <div class="w-40">{{ $unite->label }}</div>
            <div>({{ count( $unite->requirements) }} utilisations)</div>
        </div>
    @empty
        
    @endforelse

</x-app-layout>