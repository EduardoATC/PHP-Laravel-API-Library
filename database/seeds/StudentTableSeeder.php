<?php

use Illuminate\Database\Seeder;
use App\Student;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create();

        // And now, let's create a few articles in our database:
        for ($i = 0; $i < 5; $i++) {
            Student::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->sentence
            ]);
        }
        
    }
}
