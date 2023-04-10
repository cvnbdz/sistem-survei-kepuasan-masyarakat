<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OpsiJawaban extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function pertanyaan()
    {
        return $this->belongsTo(Pertanyaan::class);
    }
}
