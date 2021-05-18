<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Libri;
use App\Models\User;

class Prestiti extends Model 
{
    use HasFactory;
    
    public function libri() {
        return $this->belongTo(Libri::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }

    protected $table = "prestiti";

    
}
