<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Facturation extends Model
{
    /**
     * Retourne le devis de cette facturation
     * @return HasOne
     */
    public function devis(): HasOne
    {
        return $this->hasOne(Devis::class);
    }
}
