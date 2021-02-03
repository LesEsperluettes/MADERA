<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\FamilleComposant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant query()
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FamilleComposant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FamilleComposant extends Model
{
    protected $table = 'famille_composant';

    /**
     * Retourne les composants de cette famille
     * @return HasMany
     */
    public function composants(): HasMany
    {
        return $this->hasMany(Composant::class);
    }
}
