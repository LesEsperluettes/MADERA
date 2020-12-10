<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    public function type(){
        return $this->hasOne(TypeSection::class);
    }

    public function parametres(){
        return $this->hasMany(SectionParametre::class);
    }
}
