<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;

    const TYPE_UNDEFINED    = 0;    //unclassified
    const TYPE_VEGETABLE    = 1;    //fruit and vegetables
    const TYPE_FECULENT     = 2;    //cereales, rice, beans, pease, ...
    const TYPE_PROTEINES    = 3;    //meat, fish, eggs
    const TYPE_MILK         = 4;    //Milk based, like cheese, yogurt, etc...
    const TYPE_LIPIDES      = 5;    //Oil, seeds, fat, butter, ...
    const TYPE_GLUCIDES     = 6;    //Sugar
    const TYPE_SEAFOOD      = 7;    //crustaceans and molluscs
    const TYPE_SPICES       = 8;    //Spice, condiment, aromates

    public function receipes(){
        return $this->belongsToMany(Receipe::class, "requirements");
    }
}
