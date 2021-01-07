<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilleComposants extends Model
{
    /**
     * Return every composants in this famille
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function composants(){
        return $this->hasMany(Composant::class);
    }
}
