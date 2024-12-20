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

    'panel_name' => 'فروش (Selora)',

    'description' => 'یک پنل مدیریت فروش با طراحی زیبا که به کسب‌وکارها این امکان را می‌دهد تا فرآیندهای فروش خود را ساده‌سازی کنند، عملکرد را پیگیری کنند و درآمد را به راحتی به حداکثر برسانند.',

    'sections' => [
        'content' => [
            'name' => 'محتوا',
            'title' => 'مدیریت محتوا',
            'menus' => [
                'group_product' => 'محصول و خدمت',
                'product_category' => 'دسته‌بندی محصولات',
                'group_content' => 'محتوا',
                'blog_category' => 'دسته‌بندی وبلاگ',
                'group_menu' => 'منو و لیست',
            ],
        ],
        'sell' => [
            'name' => 'فروش',
            'title' => 'مدیریت فروش',
            'menus' => [
                'group_sell' => 'فروش',
                'group_advertising_and_marketing' => 'تبلیغات و بازاریابی',
                'group_financial_management' => 'مدیریت مالی',
            ],
        ],
        'account' => [
            'name' => 'حساب‌های کاربری',
            'title' => 'حساب‌های کاربری',
            'menus' => [
                'group_customer' => 'مشتری‌ها',
            ],
        ],
        'system' => [
            'name' => 'مدیریت',
            'title' => 'مدیریت سیستم',
            'menus' => [
                'group_order' => 'سفارش‌ها',
                'order_status' => 'وضعیت‌های سفارش',
                'group_plugins_and_modules' => 'افزونه‌ها و ماژول‌ها',
            ],
        ],
        'report' => [
            'name' => 'گزارشات',
            'title' => 'گزارشات مدیریتی',
        ],
    ],

    'dashboard' => [
        'title' => 'داشبورد فروش (Selora)',
        'tiles' => [
            'total_customers' => 'تعداد مشتریان',
            'total_sales' => 'کل فروش',
            'total_orders' => 'تعداد سفارشات',
            'total_online' => 'مشتریان آنلاین',
            'total_sales_month' => 'کل فروش این ماه',
            'total_sales_last_month' => 'کل فروش ماه گذشته',
        ],
    ],

    'taxonomy_type' => [
        'product_category' => [
            'label' => 'دسته‌بندی محصولات',
            'description' => 'توضیحات دسته‌بندی محصولات',
            'translation' => [
                'name' => [
                    'label' => 'نام',
                    'info' => 'نام دسته‌بندی محصولات',
                    'placeholder' => 'نام دسته‌بندی محصولات را وارد کنید',
                ],
                'description' => [
                    'label' => 'توضیحات',
                    'info' => 'توضیحات دسته‌بندی محصولات',
                    'placeholder' => 'توضیحات دسته‌بندی محصولات را وارد کنید',
                ],
            ],
            'metadata' => [
                'column_number' => [
                    'label' => 'تعداد ستون',
                    'info' => 'تعداد ستون دسته‌بندی محصولات',
                    'placeholder' => 'تعداد ستون دسته‌بندی محصولات',
                ],
            ],
        ],
        'blog_category' => [
            'label' => 'دسته‌بندی وبلاگ',
            'description' => 'توضیحات دسته‌بندی وبلاگ',
            'translation' => [
                'name' => [
                    'label' => 'نام',
                    'info' => 'نام دسته‌بندی وبلاگ',
                    'placeholder' => 'نام دسته‌بندی وبلاگ را وارد کنید',
                ],
                'description' => [
                    'label' => 'توضیحات',
                    'info' => 'توضیحات دسته‌بندی وبلاگ',
                    'placeholder' => 'توضیحات دسته‌بندی وبلاگ را وارد کنید',
                ],
            ],
            'metadata' => [
                'column_number' => [
                    'label' => 'تعداد ستون',
                    'info' => 'تعداد ستون دسته‌بندی وبلاگ',
                    'placeholder' => 'تعداد ستون دسته‌بندی وبلاگ',
                ],
            ],
        ],
        'order_status' => [
            'label' => 'وضعیت های سفارش',
            'description' => 'توضیحات وضعیت های سفارش',
            'translation' => [
                'name' => [
                    'label' => 'نام',
                    'info' => 'نام وضعیت های سفارش',
                    'placeholder' => 'نام وضعیت های سفارش را وارد کنید',
                ],
                'description' => [
                    'label' => 'توضیحات',
                    'info' => 'توضیحات وضعیت های سفارش',
                    'placeholder' => 'توضیحات وضعیت های سفارش را وارد کنید',
                ],
            ],
        ],
    ],

];
