<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Gamme extends Model
{
    /**
     * Retourne l'insolant de cette gamme
     * @return HasOne
     */
    public function isolant(): HasOne
    {
        return $this->hasOne(Isolant::class);
    }

    /**
     * Retourne l'ouverture de cette gamme
     * @return HasOne
     */
    public function ouverture(): HasOne
    {
        return $this->hasOne(Couverture::class);
    }

    /**
     * Retourne la qualité d'huisserie de cette gamme
     * @return HasOne
     */
    public function qualiteHuisserie(): HasOne
    {
        return $this->hasOne(QualiteHuisserie::class);
    }

    /**
     * Retourne l'ossature bois de cette gamme
     * @return HasOne
     */
    public function ossatureBois(): HasOne
    {
        return $this->hasOne(OssatureBois::class);
    }

    /**
     * Retourne la finition de cette gamme
     * @return HasOne
     */
    public function finition(): HasOne
    {
        return $this->hasOne(Finition::class);
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
