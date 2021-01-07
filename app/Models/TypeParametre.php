<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeParametre extends Model
{
    /**
     * Return every SectionParametres corresponding to this TypeParametre
     * @return HasMany
     */
    public function sectionParametres(): HasMany
    {
        return $this->hasMany(SectionParametre::class);
    }

    /**
     * Return every parametres who uses this TypeParametre
     * @return HasMany
     */
    public function parametres(): HasMany
    {
        return $this->hasMany(TypeSectionParameter::class);
    }
}
