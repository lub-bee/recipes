<x-reader-layout>
    
    <div x-data="{ openIngredient: false, openMenu: false}" class='md:hidden absolute left-6 right-6'>
        <div class='text-sky-700'>
            <div class='p-2 border border-t-0 rounded-b border-sky-700  bg-white drop-shadow' x-show="openIngredient" x-cloak x-transition.scale.origin.top @click.outside="openIngredient = false">
                <div class='text-coral text-lg border-y border-coral mb-4 flex px-2'>
                    <h1 class="flex-1 text-center"><i class='fa-solid fa-utensils'></i> Ingredients</h1>
                    <i class='flex-none fa-solid fa-close flex items-center px-2 rounded hover:bg-coral-200' @click="openIngredient = false"></i>
                </div>
                
                <div class='grid grid-col-1 sm:grid-cols-2 max-h-[80vh] overflow-y-scroll'>
                    @forelse ($receipe->requirements as $requirement)
                    <div class='hover:text-coral-400 hover:cursor-pointer transition' x-data="{checked:false}" @click="checked = !checked">
                        <i class='fa-regular fa-circle text-xs text-coral' x-show="!checked"></i> 
                        <i class='fa-solid fa-circle text-xs text-coral' x-show="checked"></i> 
                        {{ ucfirst($requirement->ingredient->name) }} - {{ $requirement->quantity }}<span class="text-xs text-coral">{{ $requirement->unite->abbr }}</span>
                    </div>
                @empty
                    Oula! C'est vide...
                @endforelse
                </div>
                <div class='text-xs text-right'>
                    <span>Astuce</span> : Cliquez sur les ingrédients pour changer le <i class='fa-regular fa-circle text-xs text-coral'></i> marqueur.
                </div>
            </div>
            <div class='flex justify-start px-2 gap-0.5'>
                <div class='flex items-center gap-2 rounded-b bg-coral-500 p-2 px-4 text-white text-sm drop-shadow hover:cursor-pointer' @click="openMenu = !openMenu">
                    <i class='fa-solid fa-ellipsis-vertical'></i>
                </div>
                <div class='flex items-center gap-2 rounded-b bg-sky-700 p-2 text-white text-sm drop-shadow hover:cursor-pointer' @click="openIngredient = !openIngredient">
                    <div>Ingredients</div>
                    <i class='fa-solid fa-caret-down transition-all' :class="!openIngredient || 'rotate-180'"></i>
                </div>   
            </div>
        </div>
        <div class='fixed inset-6 bg-white rounded-xl shadow-2xl max-w-sm mx-auto border border-sky-700 overflow-hidden flex flex-col overflow-y-scroll' x-show="openMenu" x-transition.opacity x-cloak>
            <div class='bg-white sticky top-0 p-2'>
                <div class='text-center text-xl text-coral border-y border-coral flex items-center' @click.outside="openMenu = false">
                    <div class='flex-1'>
                        <i class='fa-solid fa-ellipsis-vertical px-2'></i> Menu
                    </div>
                    <i class='fa-solid fa-close flex-none flex items-center rounded p-2 py-1 hover:bg-coral-200' @click="openMenu = false"></i>
                </div>
            </div>
            
            <div class='flex-1 p-2 flex flex-col text-sky-600'>
                <x-reader-menu-option label="Favoris" url="" icon="fa-regular fa-bookmark"/>
                <x-reader-menu-option label="Liste de courses" url="" icon="fa-solid fa-list-check"/>
                <x-reader-menu-option label="Planning" url="" icon="fa-regular fa-calendar"/>
                <hr class="">
                <x-reader-menu-option label="Retourner à la recette" :url='route("receipe.show",$receipe->id)' icon="fa-regular fa-rectangle-list"/>
                <x-reader-menu-option label="Retourner à liste" :url='route("receipe.index")' icon="fa-solid fa-list"/>

            </div>
        </div>
    </div>

    <div class='p-6 flex-1 flex flex-col justify-center md:order-2 md:max-w-lg md:mx-auto'>

        <header class="p-2 flex gap-4 items-center justify-between text-gray-700">
            <div class='text-xs'>
                {{ ucfirst($receipe->name) }}
            </div>
            <div class='flex gap-x-1 items-baseline flex-wrap justify-center leading-tight'>
                <div class=''>
                    Step 
                </div>
                <div class='text-xs '>
                    <span class="text-xl text-coral">{{ $step_num }}</span> / {{ count($receipe->steps) }}
                </div>    
            </div>
        </header>
    
        <main class="p-2 bg-white rounded shadow">
    
            <div class=''>
                {{ $step->description }}
            </div>
    
        </main>    
    </div>
    
    <div class='md:order-1 md:flex md:flex-col md:w-80 md:bg-white md:shadow md:relative'>
        {{-- Ingredient - PC ONLY --}}
        <div class='hidden md:block md:flex-1 h-full overflow-y-scroll pb-28' x-data="{showHelp : true}">
            <h1 class="text-coral text-lg border-y border-coral mb-4 text-center md:text-2xl md:bg-coral md:text-white sticky top-0"><i class='fa-solid fa-utensils'></i> Ingredients</h1>
            <div class='mx-4 mb-4 p-2 text-xs border border-coral-500 bg-coral-100 rounded-lg relative' x-show="showHelp" x-transition.opacity.duration.300ms>
                <div>Astuce :</div>
                <div class=''>
                    Cliquez sur les ingrédients pour changer le <i class='fa-regular fa-circle text-xs text-coral'></i> marqueur.    
                </div>
                <div class='flex justify-center items-center gap-2 hover:text-coral hover:cursor-pointer transition' @click="showHelp = !showHelp" >
                    <i class='fa-solid fa-close text-base'></i> Fermer
                </div>
            </div>
            <div class='px-6 grid grid-cols-1'>
                @forelse ($receipe->requirements as $requirement)
                    <div class='hover:text-coral-400 hover:cursor-pointer transition' x-data="{checked:false}" @click="checked = !checked">
                        <i class='fa-regular fa-circle text-xs text-coral' x-show="!checked"></i> 
                        <i class='fa-solid fa-circle text-xs text-coral' x-show="checked"></i> 
                        {{ ucfirst($requirement->ingredient->name) }} - {{ $requirement->quantity }}<span class="text-xs text-coral">{{ $requirement->unite->abbr }}</span>
                    </div>
                @empty
                    Oula! C'est vide...
                @endforelse
            </div>
        </div>

        {{-- @dump($step_num) --}}
        {{--  --}}
        <div class='md:absolute md:bottom-0 md:w-full'>
            <nav class="bg-sky-800 p-2 px-8 text-white grid grid-cols-2 text-3xl border-y ">
            <a href="{{ route("reader",[$receipe->id,($step_num-1)]) }}" class="flex items-center">
                <i class='fa-solid fa-chevron-left'></i>
                <span class="block text-xs">Précédent</span>
            </a>

            <a href="{{ route("reader",[$receipe->id, $step_num+1]) }}" class="flex items-center justify-end">
                <span class="block text-xs">Suivant</span>
                <i class='fa-solid fa-chevron-right'></i>
            </a>
        </nav>

        <footer class="bg-white text-3xl p-6 py-2 text-sky-700">
            <i class='fa-solid fa-plus'></i> timer
        </footer>
        </div>
        
    </div>
    
</x-reader-layout>