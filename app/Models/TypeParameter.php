<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class TypeParameter extends Model
{
    protected $table = 'type_parameter';

    /**
     * Retourne les TypeSections qui utilise ce paramètre
     * @return BelongsToMany
     */
    public function typeSections(): BelongsToMany
    {
        return $this->belongsToMany(TypeSection::class,'type_section_parameter');
    }
}
