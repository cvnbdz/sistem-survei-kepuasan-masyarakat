<?php

namespace App\Models;

use App\Models\OpsiJawaban;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Survey extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function opsi_jawaban()
    {
        return $this->belongsTo(OpsiJawaban::class);
    }
}
