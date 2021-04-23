<?php


use Keipa\PhoneDir\Models\JuridicalSubscribers;
use Keipa\PhoneDir\Models\Phonenumber;
use Keipa\PhoneDir\Models\PrivateSubscriber;

$factory->define(Phonenumber::class, function (Faker\Generator $faker) {
    return [
        'phonenumber' => $faker->regexify('8[0-9]{10}$'),
        'juridical_subscribers_id' => function () {
            return factory(JuridicalSubscribers::class)->create()->id;
        }
    ];
});

$factory->define(PrivateSubscriber::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'surname' => $faker->lastName,
        'patronymic' => $faker->firstNameMale,
    ];
});

$factory->define(JuridicalSubscribers::class, function (Faker\Generator $faker) {
    return [
        'org_name' => $faker->company,
        'department_name' => $faker->streetSuffix,
        'country' => $faker->country,
        'city' => $faker->city,
        'street' => $faker->streetName,
        'house' => $faker->buildingNumber,
        'float' => $faker->buildingNumber,
    ];
});