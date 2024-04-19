<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cultura extends Model
{
    protected $table = 'culturas';

    protected $fillable = [
        'cultureTittle',
        'soilHumidity',
        'soilTemperature',
        'soilConductivity',
        'airTemperature',
        'airHumidity',
        'soilPH',
        'nitrogen',
        'phosphorus',
        'potassium',
    ];
}
