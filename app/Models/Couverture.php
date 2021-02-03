<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Couverture
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture query()
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Couverture whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Couverture extends Model
{
    protected $table = 'couverture';

    /**
     * Retourne les gammes qui utilisent cette ouverture
     * @return HasMany
     */
    public function gammes(): HasMany
    {
        return $this->hasMany(Gamme::class);
    }
}
