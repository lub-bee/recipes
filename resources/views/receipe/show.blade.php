<x-app-layout>

    <x-slot name="header">
        <div class='flex'>
            <h2 class="flex-1 font-semibold text-xl">{{ ucfirst($receipe->name) }}</h2>
            <div class='flex-none flex gap-2 text-sky-500 group text-base'>
                @livewire("favorite-icon-form", ["receipe_id"=>$receipe->id])
                <a href="{{ route("favorite.index") }}" class="self-stretch hover:bg-coral-200 hover:text-coral flex gap-1 justify-center items-center px-2 py-1 rounded   transition">
                    <i class='fa-solid fa-book-bookmark'></i>
                    <div class='hidden sm:block'>
                        Favoris
                    </div>
                </a>
                <a href="" class="self-stretch hover:bg-coral-200 hover:text-coral flex gap-1 justify-center items-center px-2 py-1 rounded  transition">
                    <i class='fa-solid fa-list-check'></i>
                    <div class='hidden sm:block'>
                        Liste de courses
                    </div>
                </a>
                <a href="" class="self-stretch hover:bg-coral-200 hover:text-coral flex gap-1 justify-center items-center px-2 py-1 rounded  transition">
                    <i class='fa-regular fa-calendar-plus'></i>
                    <div class='hidden sm:block'>
                        Planning
                    </div>
                </a>
            </div>
        </div>
        
    </x-slot>

    <div class='m-6 bg-white rounded-xl overflow-hidden shadow'>
        
        <div class='hidden bg-coral text-white sm:flex sm:flex-row p-2 sm:divide-y-0 sm:divide-x divide-white '>
            
            <div class='flex-1 flex gap-2 px-2 justify-center'>
                <div class=''>
                    <span class="hidden md:inline">Difficulté</span><span class="md:hidden">Diff.</span>
                </div>
                <div class=''>
                    @for ($i = 0; $i < $receipe->difficulty; $i++ )
                        <i class='fa-solid fa-star'></i>
                    @endfor
                </div>
            </div>

            <div class='flex-1 px-2 flex justify-center items-center gap-1'>
                <i class='fa-regular fa-clock'></i> <span class="hidden md:inline">Préparation</span><span class="md:hidden">Prép.</span> {{ $receipe->preparation_time }}<span class="text-xs">min</span>
            </div>

            <div class='flex-1 px-2 flex justify-center items-center gap-1'>
                <i class='fa-solid fa-fire-burner'></i> <span class="hidden md:inline">Cuisson</span><span class="md:hidden">Cuis.</span> {{ $receipe->cooking_time }}<span class="text-xs">min</span>
            </div>

            <div class='elgna bg-white w-5 flex-none'></div>
            <a href="{{ route("user.show",$receipe->author) }}" class='flex-1 bg-white text-coral rounded-tr text-center' title="Voir l'utilisateur">
                Par <span class="font-semibold">{{ $receipe->user->name }}</span>
            </a>

        </div>

        <div class='p-6 py-4'>
            <div class='flex items-center pb-2'>
                <h1 class="flex-1 text-xl text-sky-700"><i class='fa-solid fa-basket-shopping'></i> Ingredients</h1>
                <a href="" class="btn group flex items-center gap-0.5">
                    <div class='hidden sm:block group-hover:block'>
                        Ajouter au panier
                    </div>
                    <i class='fa-solid fa-share text-xs -rotate-[45deg] group-hover:rotate-0 transition-all'></i>
                    <i class='fa-solid fa-basket-shopping'></i>
                </a>
            </div>
            
            <div class='grid grid-cols-2'>
                @forelse ($receipe->requirements as $requirement)
                    <x-single-list-item-requirement :requirement="$requirement"/>
                @empty
                    Pas d'ingredient? Bizarre...
                @endforelse
            </div>
        </div>

        <div class='text-coral text-center'>
            ~~~
        </div>

        <div class='p-6 py-4'>
            <div class='flex items-center pb-2'>
                <h1 class="flex-1 text-xl text-sky-700"><i class='fa-solid fa-spoon'></i> Préparation</h1>
                <a href="{{ route("reader",$receipe->id) }}" class="btn group flex items-center gap-0.5">
                    <div class='hidden sm:block group-hover:block'>
                        Commencer
                    </div>
                    <i class='fa-solid fa-spoon rotate-90 group-hover:animate-stir-spoon'></i>
                </a>
            </div>
            
            <div class='flex flex-col gap-2'>
                @forelse ($receipe->steps as $step)
                    <x-single-list-item-step :step="$step"/>
                @empty
                    Rien à préparer? Bizarre...
                @endforelse
            </div>
        </div>

    </div>

    <div class='m-6 p-6 py-4 bg-white rounded shadow'>
        
        <div class="">
            <a href="{{ route("receipe.index") }}" class="btn">Retour a la liste</a>
        </div>
    </div>
    

    
</x-app-layout>