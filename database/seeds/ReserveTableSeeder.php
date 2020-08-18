<?php

use App\Reserv;
use Illuminate\Database\Seeder;

class ReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Reserv::truncate();
        $faker = \Faker\Factory::create();
        // Crear artículos ficticios en la tabla
        for($i = 0; $i < 50; $i++) {
            Reserv::create([
                    'file'=> $faker->randomNumber(),
                    'column'=> $faker->randomNumber(),
                    'chair'=> $faker->boolean,
                    'cuantity'=> $faker->randomNumber(),
                ]);
        }
    }
}
