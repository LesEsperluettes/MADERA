<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QualiteHuisserie extends Model
{
    /**
     * Return every Gammes who use this QualiteHuisserie
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function gammes(){
        return $this->hasMany(Gamme::class);
    }
}
