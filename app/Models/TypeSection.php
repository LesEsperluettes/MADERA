<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TypeSection extends Model
{
    protected $table = 'type_section';

    /**
     * Retourne les paramètres de type de sections
     * @return BelongsToMany
     */
    public function parametres(): BelongsToMany
    {
        return $this->belongsToMany(TypeParameter::class,'type_section_parameter');
    }


}
