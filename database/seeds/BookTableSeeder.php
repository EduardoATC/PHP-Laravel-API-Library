<?php

use Illuminate\Database\Seeder;
use App\Book;

class BookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $faker = \Faker\Factory::create();
        $genero = ['horror', 'drama', 'ficcion', 'investigacion','aventura'];
        
        for ($i = 0; $i < 5; $i++) {
            Book::create([
                'title' => $faker->name,
                'sinopsis' => $faker->email,
                'genre' => $genero[$i],
                'author' => $faker->name,
                
            ]);
        }


    }
}
