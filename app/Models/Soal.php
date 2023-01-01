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

    public function jawaban()
    {
        return $this->hasMany(User::class, "jawaban_id");
    }

    public function kategorisoal()
    {
        return $this->belongsTo(Kategorisoal::class, "kategorisoal_id");
    }
    
}
