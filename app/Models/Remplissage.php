<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Remplissage
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $type
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage query()
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Remplissage whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Remplissage extends Model
{
    protected $table = 'remplissage';

    /**
     * Retourne les modules qui utilisent ce remplissage
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class,'module_remplissage');
    }
}
