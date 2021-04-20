<?php

use Keipa\PhoneDir\Models\Phonenumber;
use Faker\Generator as Faker;

$factory->define(Phonenumber::class, function (Faker $faker) {
    return [
        'phonenumber' => $faker->regexify('8[0-9]{10}$')
    ];
});