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
                    'description' => [
                        'type' => 'textarea',
                        'label' => trans('selora::base.category_type.product_category.translation.description.label'),
                        'info' => trans('selora::base.category_type.product_category.translation.description.info'),
                        'placeholder' => trans('selora::base.category_type.product_category.translation.description.placeholder'),
                        'validation' => 'string|nullable|sometimes',
                    ],
                    'meta_title' => [
                        'type' => 'text',
                        'label' => trans('selora::base.category_type.product_category.translation.meta_title.label'),
                        'info' => trans('selora::base.category_type.product_category.translation.meta_title.info'),
                        'placeholder' => trans('baselora::basese.category_type.product_category.translation.meta_title.placeholder'),
                        'validation' => 'string|nullable|sometimes',
                    ],
                    'meta_description' => [
                        'type' => 'textarea',
                        'label' => trans('selora::base.category_type.product_category.translation.meta_description.label'),
                        'info' => trans('selora::base.category_type.product_category.translation.meta_description.info'),
                        'placeholder' => trans('selora::base.category_type.product_category.translation.meta_description.placeholder'),
                        'validation' => 'string|nullable|sometimes',
                    ],
                    'meta_keywords' => [
                        'type' => 'text',
                        'label' => trans('selora::base.category_type.product_category.translation.meta_keywords.label'),
                        'info' => trans('selora::base.category_type.product_category.translation.meta_keywords.info'),
                        'placeholder' => trans('base.category_type.product_category.translation.meta_keywords.placeholder'),
                        'validation' => 'string|nullable|sometimes',
                    ],
                ],
                'metadata' => [
                    'column-number' => [
                        'type' => 'number',
                        'default' => 1,
                        'label' => trans('selora::base.category_type.product_category.metadata.column_number.label'),
                        'info' => trans('selora::base.category_type.product_category.metadata.column_number.info'),
                        'placeholder' => trans('selora::base.category_type.product_category.metadata.column_number.placeholder'),
                        'validation' => 'integer|min:1|max:4',
                    ],
                ],
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
