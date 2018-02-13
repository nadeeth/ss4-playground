<?php
use SilverStripe\Admin\ModelAdmin;

class MyAdmin extends ModelAdmin {

    private static $managed_models = [
        'Product',
        'Category'
    ];

    private static $url_segment = 'products';

    private static $menu_title = 'My Product Admin';
}
