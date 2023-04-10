<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataSurvey extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function datasurvey()
    {
        return $this->hasMany(DataSurvey::class);
    }
}
