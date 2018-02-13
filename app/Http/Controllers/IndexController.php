<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class IndexController extends Controller
{
    //
    public function show()
    {
        $home_content = view(env('THEME').'.home_content')->render();

        return view(env('THEME').'.home')->with('home_content', $home_content);
    }
}
