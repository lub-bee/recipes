<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    use HasFactory;


    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, "requirements");
    }

    public function requirements(){
        return $this->hasMany(Requirement::class, "receipe_id");
    }

    public function steps(){
        return $this->hasMany(Step::class,"receipe_id")->orderBy('order');
    }
}
