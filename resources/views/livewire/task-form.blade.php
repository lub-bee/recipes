<div x-data="{open : false, detailOpen: false}">
    <form wire:submit.prevent="submit">

        <div class='flex justify-end'>
            <button class='btn' @click.prevent="open=!open" x-show="!open">
                <i class='fa-solid fa-plus'></i> Ajouter une tâche <i class='fa-solid fa-caret-down'></i>
            </button>
        </div>

        <div class='flex flex-col border border-sky-900 rounded overflow-hidden' x-show="open" x-cloak>
            <div class='bg-sky-700 text-white p-2'>
                Nouvelle tâche :
            </div>
            <div class='flex items-end p-2'>
                <div class="flex-1 flex flex-col gap-4">
                    <div class='flex flex-col'>
                        <div class='flex text-xs text-gray-600'>
                            <div class='flex-1'>
                                Titre
                            </div>
                            <div class=''>
                                {{ mb_strlen($label) }}/50
                            </div>
                        </div>
                        <input class="flex-1" type="text" wire:model="label" placeholder="3 Carrotes !Important!">
                        @error('label') 
                            <div class="text-red-500 text-xs flex-1 text-right">{{ $message }}</div> 
                        @enderror    
                    </div>
                    
                    <div class='flex flex-col' x-show="detailOpen" x-cloak>
                        <div class='flex text-xs text-gray-600'>
                            <div class='flex-1'>
                                Détail
                            </div>
                            <div class=''>
                                {{ mb_strlen($detail) }}/255
                            </div>
                        </div>
                        <textarea wire:model="detail" placeholder="(Optionnel) Pour la salade de demain"></textarea>
                        @error('detail') 
                            <div class="text-red-500 text-xs">{{ $message }}</div> 
                        @enderror
                    </div>


                </div>
                <div class='w-40 text-center'>
                    <button class="text-sky-700 px-2" @click.prevent="detailOpen= !detailOpen" x-show="!detailOpen">Ajouter des details</button>
                    <button class="text-red-600 px-2" @click.prevent="detailOpen= !detailOpen" x-show="detailOpen"><i class='fa-solid fa-close'></i> Fermer les details</button>
                </div>
            </div>
    
            <div class='flex justify-center gap-2 bg-gray-50 border-t p-2'>
                <button class='w-40 btn btn-red' @click.prevent="open=!open">
                    <i class='fa-solid fa-close'></i> Fermer
                </button>
                <button class="w-40 btn"><i class='fa-solid fa-save'></i> Enregistrer</button>
            </div>
            
        </div>
        
        
    </form>
</div>
