<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $tirmestamps = false;
    protected $guarded = [];
    public function roles()
    {
        return $this->belongsToMany(Role::class, 'user_role');
    }
}
