<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Event extends Model
{
    protected $fillable = [
        'name',
    ];

    public function categories()
    {
        return $this->belongsToMany('App\Http\Model\Category');
    }

    // public static function search(Request $request)
    // {
    //     $query = self::query();

    //     // if ($request->filled('event_at')) {
    //     // }
    //     $query->whereHas('users', function ($query){
    //         $query->where('users.id', \Auth::user()->id);
    //     });

    //     return $query->get();
    // }
}
