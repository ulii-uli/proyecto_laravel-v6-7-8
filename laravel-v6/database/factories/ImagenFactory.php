<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\imagen;
use App\producto;
use Faker\Generator as Faker;

$factory->define(imagen::class, function (Faker $faker) {
    return [
        //

        'name'=>$this->faker->word,
        'tag'=>$this->faker->sentence,
        'imag'=> $faker->imageUrl($width = 640, $height = 480),

        //llaves foraneas

        'produc_id'=>producto::all()->random()->id
       
      
    ];
});
