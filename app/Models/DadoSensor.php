<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DadoSensor extends Model
{
    protected $table = 'dados_sensores';

    protected $fillable = [
        'soilHumidity',
        'soilTemperature',
        'soilConductivity',
        'soilPH',
        'nitrogen',
        'phosphorus',
        'potassium',
    ];
}
