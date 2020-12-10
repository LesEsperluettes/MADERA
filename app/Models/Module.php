<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    public function gamme(){
        return $this->hasOne(Gamme::class);
    }

    public function remplissage(){
        return $this->hasOne(Remplissage::class);
    }

    public function devis(){
        return $this->hasOne(Devis::class);
    }
}
