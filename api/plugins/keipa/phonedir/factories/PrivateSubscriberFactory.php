<?php

use Keipa\PhoneDir\Models\PrivateSubscriber;
use Faker\Generator as Faker;

$factory->define(PrivateSubscriber::class, function (Faker$faker) {
    return [
        'firstname' => $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->middleNameMale,
    ];
});