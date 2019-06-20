<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'no' => $faker->regexify('s[0-9]{10}'),
        'tel' => $faker->phoneNumber()
    ];
});
