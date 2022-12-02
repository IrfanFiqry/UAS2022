<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    use HasFactory;

    protected $table = "soal";

    public function pelajar()
    {
        return $this->belongsTo(Pelajar::class, "pelajar_id");
    }

    public function komentar()
    {
        return $this->hasOne(User::class, "pelajar_id");
    }
    
}
