<div class='m-6 bg-white shadow rounded p-6 px-4 flex flex-col gap-4' x-data="{
    openForm: false, 
    openDeleteChecked : false, 
    openDeleteAll : false,
    showDetail : false,
    showChecked : false,
    deleteMode: @entangle('deleteMode'),
}">
    
    {{-- Header --}}
    <div class='flex justify-end items-center gap-2'>
        <div class=''>
            <input type="checkbox" id="showChecked" class="rounded" wire:model.defer="showChecked">
        </div>
        <div class='text-xs'>
            <label for="showChecked">Cacher tâches terminées</label>
        </div>
        <div class=''>
            <input type="checkbox" id="showDetail" class="rounded">
        </div>
        <div class='text-xs'>
            <label for="showDetail">Afficher les details</label>
        </div>

        <button class="btn" @click.prevent.submit="openForm = !openForm; deleteMode = false">
            <i class='fa-solid fa-plus'></i> Ajouter une tâche <i class='fa-solid fa-caret-down'></i>
        </button>

        <button class="btn" @click.prevent.submit="deleteMode = !deleteMode">
            <i class='fa-solid fa-trash-can'></i> Suppression de tâche <i class='fa-solid fa-caret-down'></i>
        </button>
    </div>

    {{-- Add form --}}
    <div class='flex flex-col gap-4 border rounded-xl border-sky-700 overflow-hidden pb-4' x-show="openForm" x-transition x-cloak @click.outside="openForm = false">

        <div class='bg-sky-700 text-white text-xl p-2 px-4 flex gap-4'>
            <h1 class="flex-1">Création de tâches</h1>
            <button @click.prevent.submit="openForm = false"><i class='fa-solid fa-close'></i></button>
        </div>
        

        <div class='flex items-center gap-2 px-4'>
            <div class="w-20 leading-10">Label</div>
            <input type="text" class="flex-1">
        </div>

        <div class='flex gap-2 px-4'>
            <div class="w-20 leading-10">Detail</div>
            <textarea class="flex-1"></textarea>
        </div>

        <div class='flex justify-center gap-2'>
            <button class="btn"><i class='fa-solid fa-save'></i> Enregistrer</button>
            <div class="btn-red-off" @click.prevent.submit="openForm = false"><i class='fa-solid fa-close'></i> Annuler</div>
        </div>
    </div>

    {{-- Deletion --}}
    <div class='border border-red-500 rounded-xl overflow-hidden flex flex-col gap-4 pb-4' x-show="deleteMode" x-transition x-cloak>
        <div class='bg-red-500 text-white text-xl p-2 px-4 flex gap-4'>
            <h1 class="flex-1">Suppression de tâches</h1>
            <button><i class='fa-solid fa-close' @click.prevent.submit="deleteMode = false"></i></button>
        </div>

        <div class="px-4">
            <div class=''>
                Cliquez directement sur l'icône <i class='fa-solid fa-trash-can'></i> des tâches à supprimer.
            </div>
            <span class="font-semibold text-red-500">
                <i class='fa-solid fa-triangle-exclamation'></i> 
                Attention :
            </span> 
            Toute suppression est irreversible.
        </div>
        <div class="flex gap-2 px-4">
            <div class='self-center flex-1'>
                Plus d'options de suppression: 
            </div>
            <button class="btn btn-red" @click.prevent.submit="openDeleteChecked = !openDeleteChecked"><i class='fa-solid fa-square-check'></i> Tâches terminées</button>
            <button class="btn btn-red" @click.prevent.submit="openDeleteAll = !openDeleteAll"><i class='fa-solid fa-trash-can'></i> Tout supprimer</button>
            <button class="btn-red-off" @click.prevent.submit="deleteMode = false"><i class='fa-solid fa-close'></i> Annuler</button>
        </div>
    </div>

    {{-- Deletion confirmation --}}
    <div class='border border-red-500 rounded-xl overflow-hidden flex flex-col gap-4 pb-4' x-show="openDeleteAll" x-transition x-cloak @click.outside="openDeleteAll = false">
        <div class='bg-red-500 text-white text-xl p-2 px-4 flex gap-4'>
            <h1 class="flex-1">Confirmation</h1>
            <button @click.prevent.submit="openDeleteAll = false"><i class='fa-solid fa-close'></i></button>
        </div>
        <div class="px-4">Etes-vous sure de vouloir supprimer la totalité de cette liste?</div>
        <div class='px-4 flex justify-center gap-2'>
            <button class="btn btn-red">Confirmer la suppression</button>
            <button class="btn-red-off" @click.prevent.submit="openDeleteAll = false"><i class='fa-solid fa-close'></i> Annuler</button>
        </div>
    </div>

    {{-- Deletion confirmation --}}
    <div class='border border-red-500 rounded-xl overflow-hidden flex flex-col gap-4 pb-4' x-show="openDeleteChecked" x-transition x-cloak @click.outside="openDeleteChecked = false">
        <div class='bg-red-500 text-white text-xl p-2 px-4 flex gap-4'>
            <h1 class="flex-1">Confirmation</h1>
            <button @click.prevent.submit="openDeleteChecked = false"><i class='fa-solid fa-close'></i></button>
        </div>
        <div class="px-4">Etes-vous sure de vouloir supprimer les tâches terminées?</div>
        <div class='px-4 flex justify-center gap-2'>
            <button class="btn btn-red">Confirmer la suppression</button>
            <button class="btn-red-off" @click.prevent.submit="openDeleteChecked = false"><i class='fa-solid fa-close'></i> Annuler</button>
        </div>
    </div>


    {{-- <div class='bg-pink-500'>
        @dump($deleteMode)
    </div> --}}

    {{-- Task item --}}
    <div class='divide-y'>
        @foreach ($tasks as $task)
            <div class="py-2">
                {{-- Mode Normal --}}
                <div class='flex flex-col gap-2'>
                    <div class='flex gap-4 items-center'>
                        <div class='w-8'>
                            <input type="checkbox" class="rounded h-6 w-6 border-2 text-sky-600 border-sky-500 focus:ring-sky-500">    
                        </div>
                        <div>Label</div>
                        <div class="text-sky-500 hover:text-sky-400 hover:cursor-pointer flex-1"><i class='fa-solid fa-align-left'></i> Voir les détails <i class='fa-solid fa-caret-down'></i></div>
                        @if($deleteMode == "delete")
                            <button class="btn-red-off self-stretch" wire:click="deleteTask"><i class='fa-solid fa-trash-can'></i></button>
                        @else
                            <button class="text-sky-700 hover:text-sky-600"><i class='fa-solid fa-edit'></i></button>
                        @endif
            
                    </div>
                    <div class='border border-sky-700 rounded-xl p-2 ml-10'>
                        Détails
                    </div>
                </div>
            </div>
        
            {{-- <livewire:task-item :task="$task" :deleteMode="$deleteMode" :wire:id="$task->id" :wire:key="$task->id"></livewire:task-item> --}}
        @endforeach
    </div>

    {{-- Task edit form --}}
    <div>
        <div class=''>
            <div class="flex gap-4">
                <input type="text">
            </div>
            <div class='flex'>
                <textarea class="flex-1"></textarea>
            </div>
            <div class='flex justify-center gap-2 items-center'>
                <button class="btn">Enregistrer</button>
                <div class='text-red-500'>
                    <i class='fa-solid fa-close'></i> Annuler les modifications
                </div>
            </div>
        </div>
    </div>

</div>