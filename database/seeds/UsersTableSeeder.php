<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Vaciar la tabla
        User::truncate();
        $faker = \Faker\Factory::create();
        // Crear la misma clave para todos los usuarios
        //conviene hacerlo antes del for para que el seeder
        //no se vuelva lento.
        $password = Hash::make('123123');
        User::create([
            'ci'=> '1231524526',
            'name'=> 'Administrador',
            'lastaname'=>'admin',
            'email'=> 'admin@prueba.com',
            'password'=> $password,
        ]);
        // Generar algunos usuarios para nuestra aplicacion
        for($i = 0; $i < 10; $i++) {
            User::create([
                #'ci'=>$faker->randomfloat($nbDigits = 10),
                'ci'=>$faker->numberBetween($min = 0000000000, $max = 2000000000),
                'name'=> $faker->name,
                'lastaname'=>$faker->lastName,
                'email'=> $faker->email,
                'password'=> $password,
            ]);}



    }
}
