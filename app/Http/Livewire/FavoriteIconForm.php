<?php

namespace App\Http\Livewire;

use App\Models\Favorite;
use App\Models\Receipe;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class FavoriteIconForm extends Component
{

    public $receipe_id;

    public function render()
    {
        $favorite = Favorite::where([
            "user_id" => Auth::user()->id,
            "receipe_id" => $this->receipe_id
        ])->get();

        $isFavorite = count($favorite) > 0;

        return view('livewire.favorite-icon-form')->with('favorite',$isFavorite);
    }

    public function like(){
        Favorite::create([
            "receipe_id" => $this->receipe_id,
            "user_id" => Auth::user()->id
        ]);
    }

    public function unlike(){
        Favorite::where([
            "receipe_id" => $this->receipe_id,
            "user_id" => Auth::user()->id
        ])->delete();
    }
}
