<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class post extends Model
{
    use HasFactory;

    protected $table = 'posts'; /* esto es lo primero que hacemos y es decirle a este modelo que tabla es la que va a administrar  */

    /* para nosotros hacer mutadores los cuales nos sirve para antes de que se envie a la base de datos modificar su valor para que no quede toda la información de manera diferente sino que tenga un estandar y un filtro adicional para evitar errores y controle como se esta almacenando esa información en las tablas:
    1. Creamos una función en modelo con el nombre de la columna la cual queremos controlar esto
        2. importar el use Atribute desde illuminate para que nos devuelva una instancia de esa clase attribute
    */

    protected function casts(): array /* hay que tener mucho cuidado con el nombre de los métodos debido a que el nombre de los métodos pertenecen a un campo de la tabla o a un método que podemos utilizar como es en este caso que lo llame cast y no dio pero lo llamte casts y funciono porque así se llama el método como tal */
    {
        return [
            "published_at" => "datetime", /* lo que nos indica es que el campo published_at tratalo como una fecha */
            "is_active" => "boolean"
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            set: function ($value) { /* lo que nosotros mandemos en la creación del campo title lo almacenamos en $value */ /* recordemos también que set se ejecutara justo cuando intentamos almacenamos ese valor en la base de datos */ /* Al método set se el conoce como MUTADOR ya que muta el valor justo antes de almacenarlo en las tablas */
                return strtolower($value); /* Esta función de PHP nos ayuda a indicar que coloque el string en minúscula */
            },
            get: function ($value) { /* y get justo cuando estoy recuperando el valor de la base de datos */ /* El método get se le conoce como accesor ya que modifica el valor justo cuando accedemos a este */
                return ucfirst($value); /* Cuidado que el método get no esta transformando en la base de datos sino cuando se muestra */
            }
        );
    }
}
