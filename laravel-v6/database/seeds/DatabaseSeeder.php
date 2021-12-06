<?php

use App\Category;
use App\Images;
use App\Article;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    { 
       /* factory(Category::class,10)->create();
        factory(Post::class,10)->create();*/

    
        factory(Category::class,10)->create();
        factory(Article::class,10)->create();
        factory(Images::class,10)->create();

        
        

        
    }
}
