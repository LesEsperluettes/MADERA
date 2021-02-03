<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\QualiteHuisserie
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Gamme[] $gammes
 * @property-read int|null $gammes_count
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie query()
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|QualiteHuisserie whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class QualiteHuisserie extends Model
{
    protected $table = 'qualite_huisserie';

    /**
     * Retourne les gammes qui utilisent cette qualité d'huisserie
     * @return HasMany
     */
    public function gammes(): HasMany
    {
        return $this->hasMany(Gamme::class);
    }
}
