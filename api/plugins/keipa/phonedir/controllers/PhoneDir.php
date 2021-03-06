<?php namespace Keipa\PhoneDir\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class PhoneDir extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController',        'Backend\Behaviors\ReorderController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $reorderConfig = 'config_reorder.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Keipa.PhoneDir', 'main-menu-item');
    }

    public function scopeFindByNumber($query, $name)
    {
        return $query->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id');
    }
}
