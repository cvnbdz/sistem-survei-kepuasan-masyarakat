<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    use HasFactory;

    public $timestamps = true;

    protected $guarded = ['id'];

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function kelamin()
    {
        return $this->belongsTo(Kelamin::class);
    }

    public function layanan()
    {
        return $this->belongsTo(Layanan::class);
    }

    public function pekerjaan()
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function pendidikan()
    {
        return $this->belongsTo(Pendidikan::class);
    }
}
