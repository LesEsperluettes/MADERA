<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Models\Facturation
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property float $total_demande
 * @property float $total_paye
 * @property int $devis_id
 * @property-read \App\Models\Devis $devis
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereDevisId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereTotalDemande($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereTotalPaye($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Facturation whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
