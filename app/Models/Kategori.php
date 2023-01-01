<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategori";

    public function kategorisoal()
    {
        return $this->belongsTo(Kategorisoal::class, "kategorisoal_id");
    }
}


