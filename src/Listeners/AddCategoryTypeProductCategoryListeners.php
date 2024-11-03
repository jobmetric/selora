<?php

namespace JobMetric\Selora\Listeners;

use JobMetric\Category\Events\CategoryTypeEvent;

class AddCategoryTypeProductCategoryListeners
{
    /**
     * Handle the event.
     */
    public function handle(CategoryTypeEvent $event): void
    {
        $event->addType([
            'type' => 'product_category',
            'args' => [
                'label' => trans('selora::base.category_type.product_category.label'),
                'description' => trans('selora::base.category_type.product_category.description'),
                'hierarchical' => true,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'selora::base.category_type.product_category.translation.name.label',
                            'info' => 'selora::base.category_type.product_category.translation.name.info',
                            'placeholder' => 'selora::base.category_type.product_category.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'selora::base.category_type.product_category.translation.description.label',
                            'info' => 'selora::base.category_type.product_category.translation.description.info',
                            'placeholder' => 'selora::base.category_type.product_category.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                    'seo' => true,
                ],
                'metadata' => [
                    'column_number' => [
                        'type' => 'number',
                        'default' => 1,
                        'label' => trans('selora::base.category_type.product_category.metadata.column_number.label'),
                        'info' => trans('selora::base.category_type.product_category.metadata.column_number.info'),
                        'placeholder' => trans('selora::base.category_type.product_category.metadata.column_number.placeholder'),
                        'validation' => 'integer|min:1|max:4',
                    ],
                ],
                'has_url' => true,
                'has_base_media' => true,
                'media' => [
                    'gallery' => [
                        'media_collection' => 'public',
                        'multiple' => true,
                        'mime_types' => [
                            'image'
                        ],
                        'size' => [
                            'default' => [
                                'w' => 500,
                                'h' => 500
                            ],
                            'thumb' => [
                                'w' => 100,
                                'h' => 100
                            ]
                        ]
                    ]
                ],
            ],
        ]);
    }
}
