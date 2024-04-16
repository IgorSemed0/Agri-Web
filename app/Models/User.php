<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'vc_firstName',
        'vc_lastName',
        'name',
        'vc_gender',
        'vc_profile',
        'vc_image',
        'email',
        'password'
    ];

    protected $table = 'users';

    public function blogPosts()
    {
        return $this->hasMany(BlogPost::class);
    }

}
