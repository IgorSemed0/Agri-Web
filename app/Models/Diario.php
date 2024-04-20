<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diario extends Model
{
    use HasFactory;
    protected $table = 'diarios';

    protected $fillable = [
       'text',
       'title',
       'it_id_user'
    ];
    public function users(){
        return $this->belongsTo(User::class);
    }
}
