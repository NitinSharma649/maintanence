<?php

use App\User;
use Illuminate\Support\Str;
use Faker\Generator as Faker;
use App\Warranty;

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

// $factory->define(User::class, function (Faker $faker) {
//     return [
//         'name' => $faker->name,
//         'role_id' => rand(2,3),
//         'email' => $faker->unique()->safeEmail,
//         'email_verified_at' => now(),
//         'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//         'remember_token' => Str::random(10),
//     ];
// });

// $factory->define(Warranty::class, function (Faker $faker) {
//     return [
//         'warranty_number' => Str::random(10),
//         'valid_from' => \Carbon\Carbon::now(),
//         'valid_to' => \Carbon\Carbon::now()->addMonths(6),
//         'created_at' => now(),
//         'updated_at' => now()
//     ];
// });
$factory->define(\App\Job::class, function (Faker $faker) {
    return [
        'complaint_id' => $faker->complaint(),
        'engineer_id' => $faker->engineer()->where('role_id',2),
        'warranty_id' => $faker->warranty(),
        'status' => 0,
        'created_at' => now(),
        'updated_at' => now()
    ];
});
