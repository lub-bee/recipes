<div>Ingredient {{ $ingredient->name }}</div>

<div class=''>
    Recette 
</div>
<div class=''>
   @forelse ($ingredient->receipes as $receipe)
       
   @empty
       
   @endforelse
</div>
