<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurante extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);
    }

    public function prato(){

        return $this->hasMany(Prato::class);
    }
}
