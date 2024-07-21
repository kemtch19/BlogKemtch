<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string("Title");
            $table->longText("Content");                      /* algo a tener en cuenta y es que si tu creaste tablas manualmente desde phpmyadmin o con algún gestor para la administración de bases de datos es mejor utilizar el comando migrate:refresh porque no se va a borrar todas las tablas creadas sino simplemente las migraciones */
            $table->string("categories");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
