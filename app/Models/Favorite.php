<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorite extends Model
{
    use HasFactory;

    protected $fillable = [
        "receipe_id",
        "user_id"
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function receipe(){
        return $this->belongsTo(Receipe::class);
    }
}
