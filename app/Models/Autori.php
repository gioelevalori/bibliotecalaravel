<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libri;

class Autori extends Model 
{
    use HasFactory;
    
    public function libri() {
        return $this->hasMany(Libri::class);
    }
}
