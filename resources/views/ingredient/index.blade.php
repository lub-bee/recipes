<x-guest-layout>
    <h1>ingredient list</h1>

    <div class="grid grid-cols-3">
    @foreach($ingredients as $ingredient)
        <a href="{{ route("ingredient.show",$ingredient->id) }}" class='hover:text-slate-400'>
            {{ $ingredient->name }}
        </a>
    @endforeach
    </div>
</x-guest-layout>