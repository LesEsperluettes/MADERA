<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\TypeParameter
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeSection[] $typeSections
 * @property-read int|null $type_sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeParameter whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
