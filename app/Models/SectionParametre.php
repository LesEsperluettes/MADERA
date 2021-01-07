<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SectionParametre extends Model
{
    /**
     * Retourne le type de ce paramètre
     * @return HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(TypeParametre::class);
    }

    /**
     * Retourne le module qui utilise ce paramètre
     * @return HasOne
     */
    public function module(){
        return $this->hasOne(Module::class);
    }
}
