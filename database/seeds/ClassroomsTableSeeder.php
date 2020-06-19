<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Classroom;

class ClassroomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i = 0; $i < 20; $i++)
      {
          $newClassroom = new Classroom();
          $newClassroom->name = $faker->lastName();
          $newClassroom->partecipants = $faker->numberBetween(15, 30);

          $newClassroom->save();
      }
    }
}
