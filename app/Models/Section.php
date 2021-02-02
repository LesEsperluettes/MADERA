<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
     * Retourne les modules qui utilisent cette section
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }
}
