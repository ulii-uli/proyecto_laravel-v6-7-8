<?php

use App\Category;
use App\imagen;
use Illuminate\Database\Seeder;

use App\Post;
use App\producto;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
        factory(Category::class,10)->create();
        factory(Post::class,10)->create();

        
        factory(producto::class,10)->create();
        factory(imagen::class,10)->create();
       
        

        
    }
}
