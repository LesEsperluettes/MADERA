<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\TypeSection
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TypeParameter[] $parametres
 * @property-read int|null $parametres_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection query()
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TypeSection whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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

    /**
     * Retourne les sections qui utilisent ce type
     * @return HasMany
     */
    public function sections(): HasMany
    {
        return $this->hasMany(Section::class);
    }


}
