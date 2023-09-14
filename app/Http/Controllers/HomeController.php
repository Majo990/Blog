<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(){
       // return ("Bienvendio a la pagian principal");
       return view('home');
    }
}
