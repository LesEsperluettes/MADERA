<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Section extends Model
{
    /**
     * Retourne le type de cette section
     * @return HasOne
     */
    public function type(): HasOne
    {
        return $this->hasOne(TypeSection::class);
    }

    /**
     * Retourne les paramètres de cette section
     * @return HasMany
     */
    public function parametres(): HasMany
    {
        return $this->hasMany(SectionParametre::class);
    }

    /**
     * Retourne le module qui utilise cette section
     * @return HasOne
     */
    public function module(): HasOne
    {
        return $this->hasOne(Module::class);
    }
}
