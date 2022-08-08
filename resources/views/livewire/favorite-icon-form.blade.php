<div class='flex items-center'>
    @if($favorite)
    <button wire:click="unlike" class="subheader-btn"><i class='fa-solid fa-bookmark'></i> Retirer Favoris</button>
    @else
    <button wire:click="like" class="subheader-btn"><i class='fa-regular fa-bookmark'></i> Ajouter Favoris</button>
    @endif
</div>
