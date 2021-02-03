<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Section extends Model
{
    protected $table = 'section';

    /**
     * Retourne le type de cette section
     * @return BelongsTo
     */
    public function type(): BelongsTo
    {
        return $this->belongsTo(TypeSection::class,'type_section_id');
    }

    /**
     * Retourne les modules qui utilisent cette section
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class,'module_section');
    }
}
