<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Category;

class  EventController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth')->only(['addPost']);
    }

    public function index(Request $request)
    {
        $events = Category::find($request->id)->events;

        return $events;
    }

    public function addPost(Request $request)
    {
        $user = \JWTAuth::parseToken()->authenticate();
        $user->events()->sync($request->event);

        return view('welcome');
    }
}
