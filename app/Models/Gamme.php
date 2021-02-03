<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\Models\Gamme
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int $isolant_id
 * @property int $couverture_id
 * @property int $qualite_huisserie_id
 * @property int $ossature_bois_id
 * @property int $finition_id
 * @property-read \App\Models\Couverture $couverture
 * @property-read \App\Models\Finition $finition
 * @property-read \App\Models\Isolant $isolant
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @property-read \App\Models\OssatureBois $ossatureBois
 * @property-read \App\Models\QualiteHuisserie $qualiteHuisserie
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme query()
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereCouvertureId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereFinitionId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereIsolantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereOssatureBoisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereQualiteHuisserieId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Gamme whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Gamme extends Model
{
    protected $table = 'gamme';

    /**
     * Retourne l'insolant de cette gamme
     * @return BelongsTo
     */
    public function isolant(): BelongsTo
    {
        return $this->belongsTo(Isolant::class);
    }

    /**
     * Retourne la couverture de cette gamme
     * @return BelongsTo
     */
    public function couverture(): BelongsTo
    {
        return $this->belongsTo(Couverture::class);
    }

    /**
     * Retourne la qualité d'huisserie de cette gamme
     * @return BelongsTo
     */
    public function qualiteHuisserie(): BelongsTo
    {
        return $this->belongsTo(QualiteHuisserie::class);
    }

    /**
     * Retourne l'ossature bois de cette gamme
     * @return BelongsTo
     */
    public function ossatureBois(): BelongsTo
    {
        return $this->belongsTo(OssatureBois::class);
    }

    /**
     * Retourne la finition de cette gamme
     * @return BelongsTo
     */
    public function finition(): BelongsTo
    {
        return $this->belongsTo(Finition::class);
    }

    /**
     * Retourne les modules qui utilisent cette gamme
     * @return HasMany
     */
    public function modules(): HasMany
    {
        return $this->hasMany(Module::class);
    }
}
