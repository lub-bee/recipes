@props([
    "receipe", 
    "editable"=>false,
    "deletable"=>false,
    "showSteps"=>false,
    "showRequirements"=>false])
<div>
<header class="flex justify-between">
    <h1 class="text-3xl font-bold">{{ $receipe->name }}</h1>
</header>

<div class='flex gap-4'>
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

@if($showRequirements)
<div class=' mt-4'>
    <h2 class="text-2xl">Ingredient</h2>
    <div class=''>
        @forelse ($receipe->requirements as $requirement)
            <x-single-list-item-requirement :requirement="$requirement"/>
        @empty
            
        @endforelse
    </div>
</div>
@endif

@if($showSteps)
<div class='mt-4'>
    <h2 class="text-2xl">Preparation</h2>
    <div class=''>
        @forelse ($receipe->steps as $step)
            <x-single-list-item-step :step="$step"/>
        @empty
            
        @endforelse
    </div>
</div>
@endif