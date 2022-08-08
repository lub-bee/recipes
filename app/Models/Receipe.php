<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Receipe extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "preparation_time",
        "cooking_time",
        "difficulty",
    ];

    public function time(){
        return ($this->preparation_time + $this->cooking_time);
    }


    public function ingredients(){
        return $this->belongsToMany(Ingredient::class, "requirements");
    }

    public function requirements(){
        return $this->hasMany(Requirement::class, "receipe_id");
    }

    public function steps(){
        return $this->hasMany(Step::class,"receipe_id")->orderBy('order');
    }

    public function user(){
        return $this->belongsTo(User::class,"author","id");
    }

    public function favorites(){
        // return $this->hasManyThrough(User::class,Favorite::class, "user_id","id");
        return $this->hasMany(Favorite::class);
    }
}
