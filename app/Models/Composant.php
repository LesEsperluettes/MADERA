<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Composant
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property int $famille_composant_id
 * @property int $fournisseur_id
 * @property-read \App\Models\FamilleComposant $familleComposant
 * @property-read \App\Models\Fournisseur $fournisseur
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Module[] $modules
 * @property-read int|null $modules_count
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant query()
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereFamilleComposantId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereFournisseurId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Composant whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Composant extends Model
{
    protected $table = 'composant';

    /**
     * Retourne le fournisseur de ce composant
     * @return BelongsTo
     */
    public function fournisseur(): BelongsTo
    {
        return $this->belongsTo(Fournisseur::class);
    }

    /**
     * Retourne la famille de ce composant
     * @return BelongsTo
     */
    public function familleComposant(): BelongsTo
    {
        return $this->belongsTo(FamilleComposant::class);
    }

    /**
     * Retourne les modules qui utilisent ce composant
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class,'composant_module');
    }
}
