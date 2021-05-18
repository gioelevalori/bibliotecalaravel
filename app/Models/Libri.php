<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autori;
use App\Models\Editori;
use App\Models\Prestiti;

class Libri extends Model 
{
    use HasFactory;

    public function autori() {
        return $this->hasMany(Autori::class);
    }

    public function editori() {
        return $this->belongsTo(Editori::class);
    }

    public function generi() {
        return $this->hasMany(Generi::class);
    }

    public function prestiti() {
        return $this->belongsTo(Prestiti::class);
    }

    protected $table = "libri";
     
}
