<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use Livewire\Component;

class SearchIngredient extends Component
{
    public $searchTerms;
    public $ingredients;

    public function render()
    {
        $searchTerms = "%{$this->searchTerms}%";

        $this->ingredients = Ingredient::where('name', 'like', $searchTerms)->get();
        // $this->ingredients = Ingredient::all();
        return view('livewire.search-ingredient');
    }
}
