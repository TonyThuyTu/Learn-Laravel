<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    
    public function home() {

        return view('home');

    }

    public function about() {

        return view('about');

    }

    public function contact() {

        return view('contact');

    }

    public function sum($a, $b) {

        $sum = $a + $b;

        return view('sum', [
            'a' => $a,
            'b' => $b,
            'sum' => $sum,
        ]);

    }

    public function users() {

        $users = ['Alice', 'Bob', 'Jame'];

        return view('users', compact('users'));

    }
    

}
