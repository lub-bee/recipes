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
                <button class="btn-red-off self-stretch"><i class='fa-solid fa-trash-can'></i></button>
            @else
                <button class="text-sky-700 hover:text-sky-600"><i class='fa-solid fa-edit'></i></button>
            @endif

        </div>
        <div class='border border-sky-700 rounded-xl p-2 ml-10'>
            Détails
        </div>
    </div>

    {{-- Mode Edit --}}
    {{-- <div class='flex flex-col gap-2'>
        <div class='flex gap-4 items-center'>
            <div class='w-8'>
                <input type="checkbox" class="rounded h-6 w-6 border-2 text-sky-600 border-sky-500 focus:ring-sky-500">    
            </div>
            <input type="text" class="flex-1" placeholder="Ex. : Carottes rapées de grand-mère">
        </div>
        <textarea class="ml-12 flex-1" placeholder="Ex. : Pour la recette de salade de ce soir"></textarea>
        <div class='flex gap-2 justify-center'>
            <button class="btn"><i class='fa-solid fa-save'></i> Enregistrer</button>
            <button class="btn-red-off">Annuler <i class='fa-solid fa-close'></i></button>
        </div>
    </div> --}}
</div>
