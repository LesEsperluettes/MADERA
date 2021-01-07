<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Composant extends Model
{
    /**
     * Retourne le fournisseur de ce composant
     * @return HasOne
     */
    public function fournisseur(): HasOne
    {
        return $this->hasOne(Fournisseurs::class);
    }

    /**
     * Retourne la famille de ce composant
     * @return HasOne
     */
    public function familleComposant(): HasOne
    {
        return $this->hasOne(FamilleComposants::class);
    }

    /**
     * Retournes les gammes qui utilisent ce composant
     * @return HasMany
     */
    public function gammes(): HasMany
    {
        return $this->hasMany(Gamme::class);
    }
}
