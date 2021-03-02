<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    return [
        'name'              => 'Chacha Nurholis',
        'email'             => 'chachanurholis29@gmail.com',
        'email_verified_at' => now(),
        'password'          => Hash::make('p@ssw0rd'),
        'remember_token'    => Str::random(10),
        'nik'               => '3271046504930001',
        'domicile'          => 'Subang, Indonesia.',
        'date_of_birth'     => '2002-03-12',
        'gender'            => 'Laki - Laki',
        'phone_number'      => '085156060481',
        'username'          => 'chanurholis',
        'term_of_us'        => 1
    ];
});
