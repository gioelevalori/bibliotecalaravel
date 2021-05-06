<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Autori;
use App\Models\Editori;

class Libri extends Model 
{
    use HasFactory;

    public function autori() {
        return $this->belongsTo(Autori::class);
    }

    public function editori() {
        return $this->belongsTo(Editori::class);
    }

    public function generi() {
        return $this->belongsTo(Generi::class);
    }

    protected $table = "libri";
     
}
