<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Composant extends Model
{
    public function fournisseurs() {
        return $this->hasMany(Fournisseurs::class);
    }

    public function familleComposants(){
        return $this->hasMany(FamilleComposants::class);
    }
}
