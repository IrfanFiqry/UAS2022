<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelajar extends Model
{
    use HasFactory;

    protected $table = "pelajar";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function Soal()
    {
        return $this->hasMany(Soal::class, "pelajar_id");
    }

    
}


