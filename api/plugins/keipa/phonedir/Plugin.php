<?php namespace Keipa\PhoneDir;

use Keipa\PhoneDir\Models\JuridicalSubscribers;
use Keipa\PhoneDir\Models\Phonenumber;
use Keipa\PhoneDir\Models\PrivateSubscriber;
use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function registerSeeder()
    {
        factory(Phonenumber::class, 1000)->create();
    }
}
