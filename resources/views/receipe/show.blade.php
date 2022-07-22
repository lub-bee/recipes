<x-guest-layout>
    <h1>{{ $receipe->name }}</h1>
    @auth
        <a href="{{ route("receipe.edit", $receipe->id) }}">Editer la recette</a>
    @else
        <a href="{{ route("login") }}">Editer la recette</a>
    @endauth
    
    <div class=''>
        <div class=''>
            Difficulty {{ $receipe->difficulty }}
        </div>
        <div class=''>
            Preparation {{ $receipe->preparation_time }}min
        </div>
        <div class=''>
            Cooking {{ $receipe->cooking_time }}min
        </div>
    </div>
    <div class=''>
        <h2>Ingredient</h2>
        <div class=''>
            @forelse ($receipe->requirements as $requirement)
                <div class=''>
                    - {{ $requirement->quantity }}{{ $requirement->unite->abbr }} {{ $requirement->ingredient->name }}
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
    <div class=''>
        <h2>Preparation</h2>
        <div class=''>
            @forelse ($receipe->steps as $step)
                <div class=''>
                    {{ $step->order }} {{ $step->description }}
                </div>
            @empty
                
            @endforelse
        </div>
    </div>
</x-guest-layout>