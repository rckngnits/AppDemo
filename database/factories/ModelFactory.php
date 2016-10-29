<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Client::class, function (Faker\Generator $faker){

	return[
		    'name' => $faker->name,
            'email' => $faker->unique()->email,
            'primary_number' => '99'.$faker->randomNumber(8),
            'secondary_number' => '98'.$faker->randomNumber(8),
            'address' => $faker->secondaryAddress(),
            'pincode' => $faker->randomNumber(6),
            'city' => $faker->city(),
            'state' => $faker->city(),
            'created_at' => $faker->dateTimeThisYear($max = 'now'),
            'updated_at' => $faker->dateTimeThisYear($max = 'now'),
	];
});

$factory->define(App\Models\Task::class, function (Faker\Generator $faker){

    return[
            'title' => $faker->sentence,
            'description' => $faker->paragraph,
            'fk_status_id' => $faker->numberBetween($min = 1, $max = 2),
            'fk_user_id_assign' => $faker->numberBetween($min = 1, $max = 5),
            'fk_user_id_created' => $faker->numberBetween($min = 1, $max = 5),
            'fk_client_id' => $faker->numberBetween($min = 1, $max = 25),
            'deadline' => $faker->dateTimeThisYear($max = 'now'),
            'created_at' => $faker->dateTimeThisYear($max = 'now'),
            'updated_at' => $faker->dateTimeThisYear($max = 'now'),
    ];
});

$factory->define(App\Models\Comment::class, function (Faker\Generator $faker){

    return[
            'comment_body' => $faker->paragraph,
            'fk_task_id' => $faker->numberBetween($min = 1, $max = 80),
            'fk_user_id' => $faker->numberBetween($min = 1, $max = 5),
            'created_at' => $faker->dateTimeThisYear($max = 'now'),
            'updated_at' => $faker->dateTimeThisYear($max = 'now'),
    ];
});