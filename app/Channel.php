<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Channel extends Model
{
    protected $fillable = [
        'name', 'url', 'slug',
    ];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
