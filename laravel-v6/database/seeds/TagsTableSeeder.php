<?php
use App\Tags;
use Illuminate\Database\Seeder;
use Illuminanate\Support\Facades\BD;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Tags')->insert([
         'nombre'=> Str::random(10),
        ]);
    }
}
