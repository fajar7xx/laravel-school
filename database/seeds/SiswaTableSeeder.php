<?php

use Illuminate\Database\Seeder;

// optional
use Illuminate\Support\Facades\DB;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // use faker
        $siswa = [];
        $faker = Faker\Factory::create();

        for($i=0; $i<10; $i++){
            $siswa[$i] = [
                'nama_depan' => $faker->firstName,
                'nama_belakang' => $faker->lastName,
                'kelamin' => $faker->randomElement($array=['L', 'P']),
                'agama' => $faker->randomElement($array=['islam', 'kristen', 'budha', 'katolik', 'hindu']),
                'alamat' => $faker->city,
                'created_at' => $faker->dateTimeThisYear()
            ];
        }
        
        DB::table('siswa')->insert($siswa);

    }
}
