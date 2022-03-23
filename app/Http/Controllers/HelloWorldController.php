<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index()
    {
        $helloworld="Hello World Sérgio";
        $number1=33;
        return view('hello_world.index',["helloWorld"=>$helloworld,"number1"=>$number1+$number1]);

    }
}
