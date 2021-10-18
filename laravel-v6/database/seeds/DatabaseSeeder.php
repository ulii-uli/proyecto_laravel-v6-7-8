<?php

use App\Category;
use Illuminate\Database\Seeder;

use App\Post;

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
        

        
    }
}
