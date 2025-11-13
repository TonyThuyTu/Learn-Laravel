<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function name($name, $age) {

        return view ('name', ['name' => $name, 'age' => $age]);

    }

    public function scores() {

        $array = [80, 95, 70, 60];

        return view ('scores', ['array' => $array]);

    }

}
