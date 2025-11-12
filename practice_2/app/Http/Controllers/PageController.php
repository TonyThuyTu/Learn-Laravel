<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    public function home() {

        return view ('home');
        
    }

    public function about() {

        return view ('about');
        
    }

    public function service() {

        return view ('service');

    }

    public function greet($name) {

        return view ('greet', ['name' => $name]);

    }

    public function sum($a, $b) {

        $sum = $a + $b;

        return view ('sum', ['a' => $a, 'b' => $b, 'sum' => $sum]);

    }

    public function minus($a, $b) {

        $minus = $a - $b;

        return view ('minus', ['a' => $a, 'b' => $b, 'minus' => $minus]);

    }

}
