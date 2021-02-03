<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
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
        return $this->belongsTo(Isolant::class,'id_isolant');
    }

    /**
     * Retourne l'ouverture de cette gamme
     * @return BelongsTo
     */
    public function couverture(): BelongsTo
    {
        return $this->belongsTo(Couverture::class,'id_couverture');
    }

    /**
     * Retourne la qualité d'huisserie de cette gamme
     * @return BelongsTo
     */
    public function qualiteHuisserie(): BelongsTo
    {
        return $this->belongsTo(QualiteHuisserie::class,'id_qualite_huisserie');
    }

    /**
     * Retourne l'ossature bois de cette gamme
     * @return BelongsTo
     */
    public function ossatureBois(): BelongsTo
    {
        return $this->belongsTo(OssatureBois::class,'id_ossature_bois');
    }

    /**
     * Retourne la finition de cette gamme
     * @return BelongsTo
     */
    public function finition(): BelongsTo
    {
        return $this->belongsTo(Finition::class,'id_finition');
    }

    /**
     * Retourne le composant de cette gamme
     * @return HasOne
     */
    public function composant(): HasOne
    {
        return $this->hasOne(Composant::class);
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
