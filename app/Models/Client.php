<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Client extends Model
{
    use HasFactory;
    protected $table = 'client';

    /**
     * Retourne tous les devis de ce client
     * @return HasMany
     */
    public function devis(): HasMany
    {
        return $this->hasMany(Devis::class);
    }
}
