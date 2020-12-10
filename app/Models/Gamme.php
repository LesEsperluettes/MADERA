<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamme extends Model
{
    public function isolant(){
        return $this->hasOne(Isolant::class);
    }

    public function ouverture(){
        return $this->hasOne(Ouverture::class);
    }

    public function qualiteHuisserie(){
        return $this->hasOne(QualiteHuisserie::class);
    }

    public function ossatureBois(){
        return $this->hasOne(OssatureBois::class);
    }

    public function finition(){
        return $this->hasOne(Finitions::class);
    }

    public function composant(){
        return $this->hasOne(Composant::class);
    }
}
