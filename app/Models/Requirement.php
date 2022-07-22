<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Requirement extends Model
{
    use HasFactory;

    public function ingredient(){
        return $this->belongsTo(Ingredient::class);
    }

    public function unite(){
        return $this->belongsTo(Unite::class);
    }

    public function receipe(){
        return $this->belongsTo(Receipe::class);
    }
}
