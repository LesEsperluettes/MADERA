<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeParametre extends Model
{
    /**
     * Retourne les sections qui utilise ce type de paramètre
     * @return HasMany
     */
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }

    /**
     * Retourne les types de sections qui utilisent ce parametre
     * @return BelongsToMany
     */
    public function typeSections(): BelongsToMany
    {
        return $this->belongsToMany(TypeSection::class);
    }
}
