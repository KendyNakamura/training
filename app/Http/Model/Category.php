<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = [
        'name',
    ];

    public function events()
    {
        return $this->belongsToMany('App\Http\Model\Event');
    }
}
