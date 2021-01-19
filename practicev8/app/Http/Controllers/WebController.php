<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index($name)
    {   

        return ['name'=>"meng","age"=>20];
        // echo $name;
        // echo "Hello on the other side ;)";
        // return view('helloWorld');
    }
}
