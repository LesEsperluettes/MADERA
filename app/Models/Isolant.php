<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Isolant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Isolant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Isolant extends Model
{
    protected $table = 'isolant';

    /**
     * Retourne les gammes qui utilisent cet isolant
     * @return HasMany
     */
    public function gammes(): HasMany
    {
        return $this->hasMany(Gamme::class);
    }
}
