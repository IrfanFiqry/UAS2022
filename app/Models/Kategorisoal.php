<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategorisoal extends Model
{
    use HasFactory;

    protected $table = "kategorisoal";


    public function Kategori()
    {
        return $this->belongsTo(Kategori::class, "kategori_id");
    }

    public function Soal()
    {
        return $this->belongsTo(Soal::class, "soal_id");
    }

}
