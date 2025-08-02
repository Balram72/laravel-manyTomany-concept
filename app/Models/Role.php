<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public $tirmestamps = false;
    protected $guarded = [];

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_role');
    }
}
