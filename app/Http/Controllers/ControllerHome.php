<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\data;

class ControllerHome extends Controller
{
    public function show()
    {
        return view('home', [
            'data' => Data::all(),
        ]);
    }
}
