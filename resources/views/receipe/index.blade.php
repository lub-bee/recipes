<x-guest-layout>
    <h1>Recettes : </h1>
    <div>
        @forelse ($receipes as $receipe)
            <a href="{{ route("receipe.show",$receipe->id) }}" class='hover:text-slate-500'>
                <div class=''>
                    {{ $receipe->name }} - Duration {{ $receipe->cooking_time + $receipe->preparation_time }}min
                </div>
            </a>
        @empty
            Pas de recette enregistrée :/
        @endforelse
    </div>
</x-guest-layout>