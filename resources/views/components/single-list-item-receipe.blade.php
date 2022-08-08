@props(["receipe", "editable"=>false, "deletable"=>false])

<a href="{{ route("receipe.show",$receipe->id) }}" class='flex gap-1 sm:gap-2 items-center py-1'>
    
    <div class='text-sm sm:text-base flex-1'>
        {{ ucfirst($receipe->name) }}
    </div>

    <div class='text-xs sm:text-base flex-none w-12 sm:w-20 text-coral'>
        @for ($i = 0; $i < $receipe->difficulty; $i++ )
            <i class='fa-solid fa-star'></i>
        @endfor
    </div>

    <div class='flex-none w-12 sm:w-20 flex justify-end items-center'>
        <div class='text-xs sm:text-base'>
            {{ $receipe->time() }}<span class="text-xs text-coral-500">min</span>
        </div>
    </div>
    <div class='flex-none w-16 sm:w-48 flex gap-2 overflow-x-scroll items-center'>
        <img class='w-16 h-10' src="https://picsum.photos/id/1/80/40" alt="">
        <img class='w-16 h-10' src="https://picsum.photos/id/2/80/40" alt="">
        <img class='w-16 h-10' src="https://picsum.photos/id/3/80/40" alt="">
        <img class='w-16 h-10' src="https://picsum.photos/id/4/80/40" alt="">
        <img class='w-16 h-10' src="https://picsum.photos/id/5/80/40" alt="">
        <img class='w-16 h-10' src="https://picsum.photos/id/6/80/40" alt="">
        <img class='w-16 h-10' src="https://picsum.photos/id/7/80/40" alt="">
    </div>
</a>