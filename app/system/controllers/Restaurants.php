<?php

namespace System\Controllers;

use Admin\Facades\AdminMenu;

/**
 * Controller Class Countries
 */
class Restaurants extends \Admin\Classes\AdminController
{
    public $implement = [
        'Admin\Actions\ListController',
    ];

    public $listConfig = [
        'list' => [
            'model' => 'Admin\Models\Restaurants_model',
            'title' => 'lang:system::lang.countries.text_title',
            'emptyMessage' => 'lang:system::lang.countries.text_empty',
            'defaultSort' => ['country_name', 'ASC'],
            'configFile' => 'countries_model',
        ],
    ];


    public function __construct()
    {
        parent::__construct();

        AdminMenu::setContext('restaurants', 'localisation');
    }
}
