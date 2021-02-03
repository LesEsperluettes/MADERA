<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Finition
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|Finition newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition query()
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Finition whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Finition extends Model
{
    protected $table = 'finition';

    /**
     * Retourne les gammes possèdant cette finition
     * @return HasMany
     */
    public function gammes(): HasMany
    {
        return $this->hasMany(Gamme::class);
    }
}
