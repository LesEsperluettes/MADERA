<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeSection extends Model
{
    public function parametres(){
        return $this->hasMany(TypeParametre::class);
    }
}
