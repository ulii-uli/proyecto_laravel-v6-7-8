<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\imagen;
use App\producto;
use Faker\Generator as Faker;

$factory->define(producto::class, function (Faker $faker) {
    return [
        //
        'name'=>$this->faker->sentence,
        'description'=>$this->faker->sentence,

        //llaves foraneas
        //'imagen_id'=> imagen::all()->random()->id



    ];
});
