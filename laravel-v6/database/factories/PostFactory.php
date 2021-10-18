<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Post;
use Faker\Generator as Faker;


$factory->define(Post::class, function (Faker $faker) {
    return [
        //
        
        'title'=>$this->faker->sentence,
        'slug'=>$this->faker->slug,
        'description'=>$this->faker->sentence,
        'image'=>$this->faker->imageUrl(1280,730),
        'metatag'=>$this->faker->text(7),
        //declaracion de llaves foraneas
        'category_id'=> Category::all()->random()->id
    ];
});
