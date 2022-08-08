<?php

namespace App\Http\Livewire;

use App\Models\Ingredient;
use App\Models\Requirement;
use App\Models\Unite;
use Livewire\Component;

class RequirementForm extends Component
{

    public $unites;
    // public $ingredient;
    public $quantity;
    public $unite_id;
    public $receipe_id;
    public $ingredientTerm;
    public $ingredients;

    protected $rules = [
        'ingredient' => 'required|max:64',
        'unite_id' => 'required|numeric|exists:unites,id',
        'quantity' => 'required|numeric',
        'receipe_id' => 'required|exists:receipes,id',
    ];

    public function updateIngredient($id){
        $ingredient = Ingredient::find($id);
        $this->ingredientTerm = $ingredient->name;
    }

    public function render()
    {
        //load the unites for the list
        $this->unites = Unite::all();

        //load the ingredient matching the search
        $searchTerm = "%{$this->ingredientTerm}%";
        $this->ingredients = Ingredient::where('name', 'like', $searchTerm)->get();

        return view('livewire.requirement-form');
    }

    public function submit(){

        $ingredient = Ingredient::where(["name" => $this->ingredientTerm])->firstOrFail();

        Requirement::insert([
            "receipe_id" => $this->receipe_id,
            "ingredient_id" => $ingredient->id,
            "unite_id" => $this->unite_id,
            "quantity" => $this->quantity,
        ]);
        return redirect()->route("receipe.edit",$this->receipe_id);
    }
}
