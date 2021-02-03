<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Module extends Model
{
    protected $table = 'module';

    /**
     * Retourne la gamme de ce module
     * @return BelongsTo
     */
    public function gamme(): BelongsTo
    {
        return $this->belongsTo(Gamme::class);
    }

    /**
     * Retourne le remplissage de ce module
     * @return BelongsToMany
     */
    public function remplissage(): BelongsToMany
    {
        return $this->belongsToMany(Remplissage::class,'module_remplissage');
    }

    /**
     * Retourne les devis qui utilisent ce module
     * @return BelongsToMany
     */
    public function devis(): BelongsToMany
    {
        return $this->belongsToMany(Devis::class,'module_devis');
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
}
