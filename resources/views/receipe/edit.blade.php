<x-app-layout>
    <x-slot name="header">
        <div class='flex'>
            <h2 class="flex-1">
                {{ __('Modifier la recette :') }} <span class="text-sky-500">{{ $receipe->name }}</span>
            </h2>
            <div class=''>
                <x-subheader-link icon="fa-solid fa-reply" label="Retour à la recette"></x-subheader-link>
            </div>    
        </div>
        
    </x-slot>

    <div class='m-6 p-4 bg-white rounded flex flex-col gap-10'>

        <div class='border border-coral-600 rounded-xl overflow-hidden' x-data="{open: false}">
            
            <div class=''>
                <x-receipe-header :receipe="$receipe"></x-receipe-header>
            </div>

            <div class='p-2 flex flex-col gap-2'>
                
                <div class='flex justify-end'>
                    <button class="btn" @click.prevent="open=!open">Modifier les Information générales <i class='fa-solid fa-caret-down transition-all' :class="open && 'rotate-180'"></i></button>
                </div>

                <form action="{{ route("receipe.update",$receipe->id) }}" method="post" class="flex flex-col gap-2" x-show="open" x-cloak x-transition>
                    @csrf
                    @method("put")

                    <div class='flex flex-col sm:flex-row sm:items-center'>
                        <div class='w-40 text-sm text-gray-500'>
                            Recette
                        </div>
                        <div class='flex-1'>
                            <input type="text" name="name" placeholder="Nom" value="{{ old("name", $receipe->name) }}" class="w-full">
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror        
                        </div>
                    </div>
                    
                    <div class='flex flex-col sm:flex-row sm:items-center'>
                        <div class='w-40 text-sm text-gray-500'>
                            <div>Temps de Préparation</div>
                            <span class="text-xs">(en minutes)</span>
                        </div>
                        <div class='flex-1'>
                            <input type="number" name="preparation_time" placeholder="Temps de Preparation" value="{{ old("preparation_time", $receipe->preparation_time) }}" class="w-full">
                            @error('preparation_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class='flex flex-col sm:flex-row sm:items-center'>
                        <div class='w-40 text-sm text-gray-500'>
                            <div>Temps de Cuisson</div>
                            <span class="text-xs">(en minutes)</span>
                        </div>
                        <div class='flex-1'>
                            <input type="number" name="cooking_time" placeholder="Temps de cuisson" value="{{ old("cooking_time",$receipe->cooking_time) }}" class="w-full">
                            @error('cooking_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class='flex flex-col sm:flex-row sm:items-center'>
                        <div class='w-40 text-sm text-gray-500'>
                            Difficulté
                        </div>
                        <div class='flex-1'>
                            <select name="difficulty" class="w-full">
                                <option @if(old('difficulty') == '1') selected="selected" @endif value="1">Facile<i class='fa-solid fa-star'></i></option>
                                <option @if(old('difficulty') == '2') selected="selected" @endif value="2">Moyenne<i class='fa-solid fa-star'></i></option>
                                <option @if(old('difficulty') == '3') selected="selected" @endif value="3">Difficile<i class='fa-solid fa-star'></i></option>
                            </select>
                            @error('difficulty')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class='flex justify-center gap-2'>
                        <button type="submit" class="btn"><i class='fa-solid fa-save'></i> Enregistrer</button>
                        <button class="btn-red-off" @click.prevent="open=!open">Annuler</button>
                    </div>
                    
                </form>
            </div>
        </div>


        <div class='flex flex-col' x-data="{open: true}">

            <div class='flex gap-4'>
                <h1 class="flex-1 self-center border-y border-sky-600 p-2">Ingredients</h1>
                <button class="btn" @click.prevent="open = !open">Ajouter des ingrédients <i class='fa-solid fa-caret-down'></i></button>
            </div>

            <div class='p-2 bg-gray-100 border-b border-sky-600' x-show="open" x-cloak x-transition>
                @livewire('requirement-form',["receipe_id"=>$receipe->id])
            </div>

            <div class='px-2 pb-2 py-4'>
                @forelse ($receipe->requirements as $requirement)
                    <div class='flex'>
                        <x-single-list-item-requirement :requirement="$requirement" :deletable="true"/>
                    </div>
                @empty
                    <div class=''>
                        Aucun ingredient enregistré pour le moment.
                    </div>
                @endforelse
            </div>
            
        </div>

        <div class='flex flex-col' x-data="{open: true}">

            <div class='flex gap-4'>
                <h1 class="flex-1 self-center border-y border-sky-600 p-2">Préparation</h1>
                <button class="btn" @click.prevent="open = !open">Ajouter des étapes <i class='fa-solid fa-caret-down'></i></button>
            </div>

            <form x-cloak x-show="open">
                
                <input type="number" name="order" placeholder="Order" value="{{ old("order",count($receipe->steps) +1) }}">
                @error('order')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <textarea name="description" placeholder="Description de l'etape">{{ old("description") }}</textarea>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                
                <input type="hidden" name="receipe_id" value="{{ $receipe->id }}">
                
                <button type="submit">Ajouter l'étape</button>
            </form>

        </div>

        <h1>Preparation</h1>
        {{-- @livewire("step-list",["receipe_id"=>$receipe->id]) --}}
        @forelse ($receipe->steps as $step)
            <x-single-list-item-step :step="$step" :deletable="true"/>
        @empty
            <div class=''>
                Aucun étape enregistrée pour le moment.
            </div>
        @endforelse

        <h1>Ajouter une etape</h1>
        <form action="{{ route("receipe.store_step", $receipe->id) }}" method="post">
            @csrf
            
            <input type="number" name="order" placeholder="Order" value="{{ old("order",count($receipe->steps) +1) }}">
            @error('order')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <textarea name="description" placeholder="Description de l'etape">{{ old("description") }}</textarea>
            @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            
            <input type="hidden" name="receipe_id" value="{{ $receipe->id }}">
            
            <button type="submit">Ajouter l'étape</button>
        </form>

        <h1>Supprimer la Recette</h1>
        <form method="post" action="{{ route("receipe.destroy",$receipe->id) }}">
            @csrf
            @method("delete")

            <input type="hidden" name="receipe_id" value="{{ $receipe->id }}">
            <button type="submit">Confirmer Suppression</button>
        </form>

        <a href="{{ route("receipe.index") }}">Retour a la liste</a>
        <a href="{{ route("receipe.show",$receipe->id) }}">Retour a la recette</a>

    
    </div>
    

</x-app-layout>