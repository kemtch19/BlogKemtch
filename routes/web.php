<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\PostsController;
use App\Models\post;

use function Pest\Laravel\post;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/home", homecontroller::class);

Route::get("/posts", [PostsController::class, "index"]); /* Esta ruta me administrara que cuando apretenemos en la url blog.test/posts me muestre la vista referente a este y todo esto pasa primero por el controlador el cual luego se encarga de hacer la lógica para esa vista y que luego se muestre */

Route::get("/posts/create", [PostsController::class, "create"]);

Route::get("/posts/show/{var}", [PostsController::class, "show"]);

Route::get("prueba", function () {

    $Post = post::find(1);
    $Post -> is_active= "0";
    $Post -> save();
    dd($Post->is_active);

    /* return $Post -> created_at->diffForHumans(); */ /* Los castings se utilizan mas que todo con las fechas y con la libreria carbon */

    // return $Post->created_at->format("d-m-y"); -> formatea la fecha para humanos


    /* Crear un post

    Acá lo que hacemos es que creamos un objeto que es una nueva instancia del modelo post. Básicamente le decimos a eloquent que es el ORM(el mapeador de bases de datos) que vamos a crear un nuevo registro, cuando nosotros en asp.net le mandabamos el contexto lo que haciamos era que podiamos facilmente interactuar directamente con la base de datos */

    /* $post = new post;
    $post -> title = "TítuLO de PRUEBa 4";
    $post -> content =  "contenido 4";
    $post -> categories = "categoria 4";
    $post->save();
    return $post; */


    /*
    buscar post por id

    $Post = post::find(2);  Esto solamente lo utilizamos si queremos encontrar por id o por algo numerico ya si queremos filtrar por otro campo tipo texto utilizamos la sentencia where("campo a buscar", "el valor como se llama en ese campo");
    return $Post;

    */


    /*
    Update mediante un filtro

    $Post = post::where("title", "titulo 2")->first();
    $Post -> categories = "PhP pa :3";
    $Post -> save();
    return $Post;

     */

    /* Listar todos los Post

    Para hacer esto lo que debemos de hacer es crear una nueva variable, luego de eso llamamos al método all() el cual nos ayuda a listar todos los registros que tenemos en esa tabla */

    /* $Post= post::all();
    return ($Post); */


    /*  Listar un solo post o que cumplan una determinada condición

        Para ello debemos de filtrar todos los registros y con la sentencia where indicamos cuales son los que debe de traer
    */

    /* $Post = post::where("id", ">=", "2")->get(); con el método get() lo que hacemos es que nos traer los resultados de la base de datos
    return $Post; */


    /* ordenaremos de manera descendente por el id y también le indicamos que seleccione solamente de esos registros ciertos campos con select  */

    /* $Post = post::orderBy("id", "desc")
                ->select("id", "title")
                ->take(2)
                ->get();
    return $Post; */


    /* Eliminación de un registro */

/*     $Post = post::find(1);
    return $Post->delete(); el -> Significa que le estamos pasando parametros y las ::clase son clases estáticas de laravel */
});
