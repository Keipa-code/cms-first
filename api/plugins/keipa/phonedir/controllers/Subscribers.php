<?php namespace Keipa\PhoneDir\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Subscribers extends Controller
{
    public $implement = [    ];
    
    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Keipa.PhoneDir', 'main-menu-item');
    }
}
