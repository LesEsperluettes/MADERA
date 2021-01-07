<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fournisseurs extends Model
{
    /**
     * Retourne les composants de ce fournisseur
     * @return HasMany
     */
    public function composants(): HasMany
    {
        return $this->hasMany(Composant::class);
    }
}
