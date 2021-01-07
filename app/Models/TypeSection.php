<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeSection extends Model
{
    /**
     * Return every parametres of this section type
     * @return HasMany
     */
    public function parametres(): HasMany
    {
        return $this->hasMany(TypeParametre::class);
    }

    
}
