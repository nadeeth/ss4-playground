<?php

use \SilverStripe\ORM\DataObject;

class Product extends DataObject {

    private static $db = [
        'Name' => 'Varchar',
        'ProductCode' => 'Varchar',
        'Price' => 'Currency'
    ];

    private static $has_one = [
        'Category' => 'Category'
    ];
}
