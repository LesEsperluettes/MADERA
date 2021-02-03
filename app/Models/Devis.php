<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Devis
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom_projet
 * @property string $reference_projet
 * @property int $client_id
 * @property-read \App\Models\Client $client
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Facturation[] $facturations
 * @property-read int|null $facturations_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis query()
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereClientId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereNomProjet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereReferenceProjet($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Devis whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Devis extends Model
{
    protected $table = 'devis';

    /**
     * Retourne le client correspondant à ce devis
     * @return BelongsTo
     */
    public function client(): BelongsTo
    {
        return $this->belongsTo(Client::class);
    }

    /**
     * Retourne les facturations de ce devis
     * @return HasMany
     */
    public function facturations(): HasMany
    {
        return $this->hasMany(Facturation::class);
    }

    /**
     * Retourne les modules utilisés par ce devis
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class,'module_devis');
    }
}
