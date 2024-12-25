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

    "panel_name" => "Shopping (Selora)",

    "description" => "A beautifully designed sales management panel that empowers businesses to streamline their sales processes, track performance, and maximize revenue with ease.",

    "sections" => [
        "content" => [
            "name" => "Content",
            "title" => "Content Management",
            "menus" => [
                "group_product" => "Product and Service",
                "product_category" => "Product Category",
                "product_tag" => "Product Tags",
                "group_content" => "Content",
                "blog_category" => "Blog Category",
                "group_menu" => "Menu and List",
            ]
        ],
        "sell" => [
            "name" => "Sell",
            "title" => "Sell Management",
            "menus" => [
                "group_sell" => "Sell",
                "group_advertising_and_marketing" => "Advertising and Marketing",
                "group_financial_management" => "Financial Management",
            ]
        ],
        "account" => [
            "name" => "Accounts",
            "title" => "Account Management",
            "menus" => [
                "customers" => "Customers",
                "customer_group" => "Customer Groups",
            ]
        ],
        "system" => [
            "name" => "System",
            "title" => "System Management",
            "menus" => [
                "configuration" => "Setting",
                "group_order" => "Orders",
                "order_status" => "Order Status",
                "return_status" => "Return Status",
                "return_action" => "Return Action",
                "return_reason" => "Return Reason",
                "tax" => "Tax",
                "tax_class" => "Tax Class",
                "group_plugins_and_modules" => "Plugins and Modules",
            ],
        ],
        "report" => [
            "name" => "Reports",
            "title" => "Management Reports",
        ],
    ],

    "dashboard" => [
        "title" => "Shopping Dashboard (Selora)",
        "tiles" => [
            "total_customers" => "Total Customers",
            "total_sales" => "Total Sales",
            "total_orders" => "Total Orders",
            "total_online" => "Online Customers",
            "total_sales_month" => "Sales This Month",
            "total_sales_last_month" => "Sales Last Month",
        ],
    ],

    "taxonomy_type" => [
        "product_category" => [
            "label" => "Product Category",
            "description" => "Product category",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the product category.",
                    "placeholder" => "Enter the description of the product category.",
                ],

            ],
            "metadata" => [
                "column_number" => [
                    "label" => "Column Number",
                    "info" => "The number of columns to display the product category.",
                    "placeholder" => "Enter the number of columns to display the product category.",
                ],
            ],
        ],
        "product_tag" => [
            "label" => "Product Tag",
            "description" => "Product tag",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the product tag.",
                    "placeholder" => "Enter the description of the product tag.",
                ],

            ],
        ],
        "blog_category" => [
            "label" => "Blog Category",
            "description" => "Blog category",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the blog category.",
                    "placeholder" => "Enter the description of the blog category.",
                ],
            ],
            "metadata" => [
                "column_number" => [
                    "label" => "Column Number",
                    "info" => "The number of columns to display the blog category.",
                    "placeholder" => "Enter the number of columns to display the blog category.",
                ],
            ],
        ],
        "order_status" => [
            "label" => "Order Status",
            "description" => "Order status",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the order status.",
                    "placeholder" => "Enter the description of the order status.",
                ],
            ],
        ],
        "return_status" => [
            "label" => "Return Status",
            "description" => "Return status",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the return status.",
                    "placeholder" => "Enter the description of the return status.",
                ],
            ],
        ],
        "return_action" => [
            "label" => "Return Action",
            "description" => "Return action",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the return action.",
                    "placeholder" => "Enter the description of the return action.",
                ],
            ],
        ],
        "return_reason" => [
            "label" => "Return Reason",
            "description" => "Return reason",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the return reason.",
                    "placeholder" => "Enter the description of the return reason.",
                ],
            ],
        ],
        "customer_group" => [
            "label" => "Customer Groups",
            "description" => "Customer groups",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the customer groups.",
                    "placeholder" => "Enter the description of the customer groups.",
                ],
            ],
        ],
        "tax_class" => [
            "label" => "Tax Class",
            "description" => "Tax class",
            "translation" => [
                "description" => [
                    "label" => "Description",
                    "info" => "The description of the tax class.",
                    "placeholder" => "Enter the description of the tax class.",
                ],
            ],
        ],
    ],

    "setting_type" => [
        "selora_config" => [
            "label" => "Sales Settings",
            "description" => "Sales settings",
            "tab" => [
                "general" => [
                    "label" => "General",
                    "group_product_label" => "Product Settings",
                    "product_limit" => "Items per page",
                    "comment" => "Allow comment",
                    "min_gift_cart" => "Minimum gift cart",
                    "max_gift_cart" => "Maximum gift cart",
                ],
            ],
        ],
    ],

];
