<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Users extends Model
{
    use HasApiTokens;
    protected $table = 'users';
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }
}
