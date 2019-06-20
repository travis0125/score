<?php

use Faker\Generator as Faker;

$factory->define(App\Score::class, function (Faker $faker) {
    $chinese = $faker->numberBetween(0, 100);
    $english = $faker->numberBetween(0, 100);
    $math = $faker->numberBetween(0, 100);
    $total = $chinese + $english + $math;
    return [
        'student_id' => function () {
            return factory(App\Student::class)->create()->id;
        },
        'chinese' => $chinese,
        'english' => $english,
        'math' => $math,
        'total' => $total
    ];
});
