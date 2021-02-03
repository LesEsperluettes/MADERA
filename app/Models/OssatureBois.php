<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\OssatureBois
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois query()
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OssatureBois whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OssatureBois extends Model
{
    protected $table = 'ossature_bois';

    /**
     * Retourne les gammes qui utilisent cette ossature bois
     * @return HasMany
     */
    public function gammes(): HasMany
    {
        return $this->hasMany(Gamme::class);
    }
}
