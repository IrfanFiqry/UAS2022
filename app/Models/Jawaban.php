<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;
    protected $table = "jawaban";

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class, "user_id");
    }
}
