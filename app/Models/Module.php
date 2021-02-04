<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * App\Models\Module
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $nom
 * @property float $prix_base
 * @property float $marge_commerciale
 * @property int $gamme_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Composant[] $composants
 * @property-read int|null $composants_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Devis[] $devis
 * @property-read int|null $devis_count
 * @property-read \App\Models\Gamme $gamme
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Montant[] $montants
 * @property-read int|null $montants_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Remplissage[] $remplissage
 * @property-read int|null $remplissage_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Section[] $sections
 * @property-read int|null $sections_count
 * @method static \Illuminate\Database\Eloquent\Builder|Module newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Module query()
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereGammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereMargeCommerciale($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereNom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module wherePrixBase($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Module whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Module extends Model
{
    protected $table = 'module';

    /**
     * Retourne le remplissage de ce module
     * @return BelongsToMany
     */
    public function remplissage(): BelongsToMany
    {
        return $this->belongsToMany(Remplissage::class,'module_remplissage');
    }

    /**
     * Retourne les montants utilisés pour ce module
     * @return BelongsToMany
     */
    public function montants(): BelongsToMany
    {
        return $this->belongsToMany(Montant::class,'module_montant');
    }

    /**
     * Retourne les sections utilisés pour ce module
     * @return BelongsToMany
     */
    public function sections(): BelongsToMany
    {
        return $this->belongsToMany(Section::class,'module_section');
    }

    /**
     * Retounre les composant utilisés par ce module
     * @return BelongsToMany
     */
    public function composants(): BelongsToMany
    {
        return $this->belongsToMany(Composant::class,'composant_module');
    }

    /**
     * Retourne les modeles qui utilisent ce module
     * @return BelongsToMany
     */
    public function modeles(): BelongsToMany
    {
        return $this->belongsToMany(Modele::class,'modele_module');
    }
}
