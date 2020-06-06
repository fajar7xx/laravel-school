<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Siswa;
use Faker\Generator as Faker;

$factory->define(Siswa::class, function (Faker $faker) {
    return [
        'user_id' => 0,
        'nama_depan' => $faker->firstName,
        'nama_belakang' => $faker->lastName,
        'kelamin' => $faker->randomElement(['L', 'P']),
        'agama' => $faker->randomElement(['islam', 'kristen', 'katolik', 'budha', 'hindu']),
        'alamat' => $faker->address,
    ];
});
