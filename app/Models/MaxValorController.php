<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MaxValorController extends Model
{
    use HasFactory;
    protected $table = 'maxvalor';

    protected $fillable = [
        'soilTemperature',
        'airTemperature',
        'airHumidity',
        'soilPH',
        'nitrogen',
        'phosphorus',
        'potassium',
    ];
}
