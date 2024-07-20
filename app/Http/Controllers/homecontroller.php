<?php

namespace App\Http\Controllers;

class homecontroller extends Controller
{
    public function __invoke() /* si solamente tenemos un controlador en el método podemos utilizar solamente __invoke */
    {
        return view("home");
    }
}
