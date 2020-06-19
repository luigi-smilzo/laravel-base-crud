<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Teacher;

class TeachersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 4; $i++)
        {
            $gender = $faker->randomElement(array('male', 'female'));

            $genderSmall = ( $gender == 'male') ? 'm' : 'f';

            $newTeacher = new Teacher();
            $newTeacher->name = $faker->name($gender);
            $newTeacher->subject = $faker->randomElement(array('biology', 'computer science', 'physics'));
            $newTeacher->gender = $genderSmall;

            $newTeacher->save();
        }
    }
}
