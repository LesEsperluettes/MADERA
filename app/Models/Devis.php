<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Devis extends Model
{
    /**
     * Retourne le client correspondant à ce devis
     * @return HasOne
     */
    public function client(): HasOne
    {
        return $this->hasOne(Client::class);
    }

    /**
     * Retourne les facturations de ce devis
     * @return HasMany
     */
    public function facturations(): HasMany
    {
        return $this->hasMany(Facturation::class);
    }

    /**
     * Retourne les modules utilisés par ce devis
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }
}
