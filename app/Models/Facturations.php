<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facturations extends Model
{
    public function devis(){
        return $this->hasOne(Devis::class);
    }
}
