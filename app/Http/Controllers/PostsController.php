<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function hola()
    {
        return view("Posts.hola");
    }

    public function create()
    {
        return view("posts.create");
    }

    public function show($var)
    {
        return view("posts.show", compact("var")); /* -------> esta es la segunda forma en la cual se le puede mandar un parametro mediante una lista */
    }
}
