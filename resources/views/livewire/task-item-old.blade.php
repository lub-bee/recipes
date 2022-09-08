<div 
    class="flex gap-4 items-center text-sky-800 py-1 group hover:bg-sky-50" 
    x-data="{detailOpen : false, editMode : false, deleteMode: false}" 
    @click.outside="editMode=false; deleteMode=false">

    {{-- Checkbok --}}
    <div class='px-4 text-3xl text-sky-600 self-start' wire:click="updateStatus">
        @if ($status == true)
            <i class='fa-regular fa-square-check'></i>
        @else
            <i class='fa-regular fa-square'></i>
        @endif
    </div>

    {{-- Content --}}
    <div class='flex-1 flex flex-col' x-show="!editMode">

        {{--  --}}
        <div class='flex items-center'>
            
            <div class='flex-1 leading-8 flex gap-4 items-center'>
                <div class="min-w-[5rem]">{{ ucfirst($task->label) }}</div>
                <div class="flex-1 text-sky-500 flex items-center gap-2">
                    @if ($task->detail) 
                        <button @click.prevent="detailOpen = !detailOpen" x-show="!detailOpen"><i class='fa-solid fa-align-left text-xs'></i> Afficher les détails</button>
                        <button class="text-gray-400" @click.prevent="detailOpen = !detailOpen" x-show="detailOpen"><i class='fa-solid fa-close'></i> Fermer les détails</button>
                    @endif
                </div>
                <div class='flex gap-4'>
                    <button @click.prevent="editMode = true" @click.prevent="update">
                        <i class='fa-solid fa-edit'></i>
                    </button>
                    <button class="border border-sky-700 rounded w-8 hover:bg-red-50 hover:border-red-500 hover:text-red-500 transition" wire:click="delete" @click.prevent="update">
                        <i class='fa-solid fa-close'></i>
                    </button>
                </div>
            </div>
            
        </div>

        {{-- Details container --}}
        @if($task->detail)
        <div class='bg-sky-700 border border-sky-900 text-white p-2 px-4 rounded-lg' x-show="detailOpen" x-transition x-cloak>
            {{ $task->detail }}
        </div>
        @endif

    </div>



    {{-- Edit Content --}}
    <form wire:submit.prevent="submit" class='flex-1 flex flex-col gap-2' x-show="editMode" x-cloak>

        {{--  --}}
        <div class='flex items-center gap-4'>
            <div class='w-12'>
                Label
            </div>
            <div class='flex-1 leading-8 flex gap-4 items-center'>
                <input class="flex-1" type="text" wire:model="label" value="{{ $label }}">
            </div>
        </div>
        @error('label') 
            <div class="text-red-500 text-xs flex-1 text-right">{{ $message }}</div> 
        @enderror  

        {{--  --}}
        <div class='flex items-center gap-4'>
            <div class='w-12'>
                Détails
            </div>
            <div class='flex-1 leading-8 flex gap-4 items-center'>
                <textarea class="flex-1" wire:model="detail">{{ $detail }}</textarea>
            </div>
        </div>
        @error('detail') 
            <div class="text-red-500 text-xs flex-1 text-right">{{ $message }}</div> 
        @enderror  

        <div class='grid grid-cols-2 gap-2' x-show="editMode">
            <button class="btn btn-red" @click.prevent="editMode = false">
                <i class='fa-solid fa-close'></i> Annuler les Modifications
            </button>
            <button class="btn">
                <i class='fa-solid fa-save'></i> 
                Enregistrer
            </button>
        </div>



    </form>

    
</div>
