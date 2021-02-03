<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Composant extends Model
{
    protected $table = 'composant';

    /**
     * Retourne le fournisseur de ce composant
     * @return HasOne
     */
    public function fournisseur(): HasOne
    {
        return $this->hasOne(Fournisseur::class);
    }

    /**
     * Retourne la famille de ce composant
     * @return HasOne
     */
    public function familleComposant(): HasOne
    {
        return $this->hasOne(FamilleComposant::class);
    }

    /**
     * Retourne les modules qui utilisent ce composant
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }
}
