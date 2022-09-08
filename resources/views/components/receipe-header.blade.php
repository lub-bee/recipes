<div class='bg-coral text-white flex flex-row p-2 sm:divide-y-0 sm:divide-x divide-white '>
            
    <div class='flex-1 flex gap-2 px-2 justify-center text-xs sm:text-sm md:text-base'>
        <div class=''>
            <span class="hidden md:inline">Difficulté</span><span class="md:hidden">Diff.</span>
        </div>
        <div class=''>
            @for ($i = 0; $i < $receipe->difficulty; $i++ )
                <i class='fa-solid fa-star'></i>
            @endfor
        </div>
    </div>

    <div class='flex-1 px-2 flex justify-center items-center gap-1 text-xs sm:text-sm md:text-base'>
        <i class='fa-regular fa-clock'></i> <span class="hidden md:inline">Préparation</span><span class="md:hidden">Prép.</span> {{ $receipe->preparation_time }}<span class="text-xs">min</span>
    </div>

    <div class='flex-1 px-2 flex justify-center items-center gap-1 text-xs sm:text-sm md:text-base'>
        <i class='fa-solid fa-fire-burner'></i> <span class="hidden md:inline">Cuisson</span><span class="md:hidden">Cuis.</span> {{ $receipe->cooking_time }}<span class="text-xs">min</span>
    </div>

    <div class='elgna bg-white w-5 flex-none hidden md:block'></div>
    <a href="{{ route("user.show",$receipe->author) }}" class='flex-1 bg-white text-coral rounded-tr text-center hidden md:block' title="Voir l'utilisateur">
        Par <span class="font-semibold">{{ $receipe->user->name }}</span>
    </a>

</div>