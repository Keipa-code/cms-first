<?php namespace Keipa\PhoneDir\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PrivateSubscriber extends Controller
{
    public $implement = [
        'Backend\Behaviors\ListController',
        'Backend\Behaviors\FormController',
        'Backend\Behaviors\ReorderController',
        'Backend\Behaviors\RelationController'
    ];

    public $relationConfig = 'config_relation.yaml';

    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Keipa.PhoneDir', 'main-menu-item', 'side-menu-item');
    }
}
