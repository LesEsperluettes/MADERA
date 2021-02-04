<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Modele extends Model
{
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
