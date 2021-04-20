<?php namespace Keipa\PhoneDir;

use System\Classes\PluginBase;
use Illuminate\Database\Eloquent\Factory as EloquentFactory;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }

    public function register()
    {
        app(EloquentFactory::class)->load(plugins_path('keipa/phonedir/factories'));
    }
}
