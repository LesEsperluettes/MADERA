<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Modele
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @property-read \App\Models\Gamme $gamme
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Modele newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Modele newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Modele query()
 * @mixin \Eloquent
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int $gamme_id
 * @method static \Illuminate\Database\Eloquent\Builder|Modele whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Modele whereGammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Modele whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Modele whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Modele whereUpdatedAt($value)
 */
class Modele extends Model
{
    protected $table = 'modele';

    /**
     * Retourne la gamme d'appartenance de ce modele
     * @return BelongsTo
     */
    public function gamme(): BelongsTo
    {
        return $this->belongsTo(Gamme::class);
    }

    /**
     * Retourne les modules qui appartiennent à ce modele
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class,'modele_module');
    }

    /**
     * Retourne les devis liés à ce modele
     * @return BelongsToMany
     */
    public function devis(): BelongsToMany
    {
        return $this->belongsToMany(Devis::class,'modele_devis');
    }
}
