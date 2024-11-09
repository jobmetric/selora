<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Base Selora Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are used during Selora for
    | various messages that we need to display to the user.
    |
    */

    'panel_name' => 'Shopping (Selora)',

    'description' => 'A beautifully designed sales management panel that empowers businesses to streamline their sales processes, track performance, and maximize revenue with ease.',

    'sections' => [
        'content' => [
            'name' => 'Content',
            'title' => 'Content Management',
            'menus' => [
                'group_product' => 'Product and Service',
                'product_category' => 'Product Category',
                'group_content' => 'Content',
                'group_menu' => 'Menu and List',
            ]
        ],
        'sell' => [
            'name' => 'Sell',
            'title' => 'Sell Management',
            'menus' => [
                'group_sell' => 'Sell',
                'group_advertising_and_marketing' => 'Advertising and Marketing',
                'group_financial_management' => 'Financial Management',
            ]
        ],
        'account' => [
            'name' => 'Accounts',
            'title' => 'Account Management',
            'menus' => [
                'group_customer' => 'Customers',
            ]
        ],
        'system' => [
            'name' => 'System',
            'title' => 'System Management',
        ],
        'report' => [
            'name' => 'Reports',
            'title' => 'Management Reports',
        ],
    ],

    'dashboard' => [
        'title' => 'Shopping Dashboard (Selora)',
        'tiles' => [
            'total_customers' => 'Total Customers',
            'total_sales' => 'Total Sales',
            'total_orders' => 'Total Orders',
            'total_online' => 'Online Customers',
            'total_sales_month' => 'Sales This Month',
            'total_sales_last_month' => 'Sales Last Month',
        ],
    ],

    'taxonomy_type' => [
        'product_category' => [
            'label' => 'Product Category',
            'description' => 'Product category',
            'translation' => [
                'name' => [
                    'label' => 'Name',
                    'info' => 'The name of the product category.',
                    'placeholder' => 'Enter the name of the product category.',
                ],
                'description' => [
                    'label' => 'Description',
                    'info' => 'The description of the product category.',
                    'placeholder' => 'Enter the description of the product category.',
                ],

            ],
            'metadata' => [
                'column_number' => [
                    'label' => 'Column Number',
                    'info' => 'The number of columns to display the product category.',
                    'placeholder' => 'Enter the number of columns to display the product category.',
                ],
            ],
        ],
    ],

];
