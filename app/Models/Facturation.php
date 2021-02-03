<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Facturation extends Model
{
    protected $table = 'facturation';

    /**
     * Retourne le devis de cette facturation
     * @return BelongsTo
     */
    public function devis(): BelongsTo
    {
        return $this->belongsTo(Devis::class);
    }
}
