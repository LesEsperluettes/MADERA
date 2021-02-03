<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

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
     * Retourne l'ouverture de cette gamme
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
     * @return BelongsToMany
     */
    public function modules(): BelongsToMany
    {
        return $this->belongsToMany(Module::class);
    }
}
