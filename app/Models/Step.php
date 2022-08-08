<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    use HasFactory;

    protected $fillable = [
        "order",
        "description",
        "receipe_id",
    ];

    public function receipe(){
        return $this->belongsTo(Receipe::class);
    }
}
