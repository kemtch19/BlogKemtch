<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $Post=post::orderBy("id", "asc")->paginate(5); /* en esta variable se metera todo el listado del modelo post o todos los campos pues que tenga la tabla */
        // return $Post;
        return view("Posts.index", compact("Post"));
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
