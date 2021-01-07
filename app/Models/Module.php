<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Module extends Model
{
    /**
     * Retourne la gamme de ce module
     * @return HasOne
     */
    public function gamme(): HasOne
    {
        return $this->hasOne(Gamme::class);
    }

    /**
     * Retourne le remplissage de ce module
     * @return HasOne
     */
    public function remplissage(): HasOne
    {
        return $this->hasOne(Remplissage::class);
    }

    /**
     * Retourne les devis qui utilisent ce module
     * @return BelongsToMany
     */
    public function devis(): BelongsToMany
    {
        return $this->belongsToMany(Devis::class,'modules_devis');
    }
}
