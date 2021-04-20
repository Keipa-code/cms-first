<?php namespace Keipa\PhoneDir\Updates;

use Keipa\PhoneDir\Models\PrivateSubscriber;
use October\Rain\Database\Updates\Seeder;
use Keipa\PhoneDir\Models\Phonenumber;

class SeedAllTables extends Seeder
{
    public function run()
    {
        factory(PrivateSubscriber::class, 50)->create()->each(function ($u) {
            $u->phonenumbers()->save(factory(Phonenumber::class)->make());
        });


            /*PrivateSubscriber::create([
                'firstname' => $faker->firstName,
                'surname' => $faker->lastName,
                'patronymic' => $faker->middleNameMale,
            'phonenumber' => $faker->regexify('8[0-9]{10}$')
        ]);*/
    }

}