<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Category;

class  EventController extends Controller
{
    public function index(Request $request)
    {
        $events = Category::find($request->id)->events;

        return ['events' => $events];
    }
}
