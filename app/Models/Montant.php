<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Montant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $debut
 * @property float $fin
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Montant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereDebut($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereFin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Montant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Montant extends Model
{
    protected $table = 'montant';

    /**
     * Retourne les modules qui utilise ce montant
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class,'module_montant');
    }
}
