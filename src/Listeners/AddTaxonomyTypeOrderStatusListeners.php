<?php

namespace JobMetric\Selora\Listeners;

use JobMetric\Taxonomy\Events\TaxonomyTypeEvent;

class AddTaxonomyTypeOrderStatusListeners
{
    /**
     * Handle the event.
     */
    public function handle(TaxonomyTypeEvent $event): void
    {
        $event->addType([
            'type' => 'order_status',
            'args' => [
                'label' => 'selora::base.taxonomy_type.order_status.label',
                'description' => 'selora::base.taxonomy_type.order_status.description',
                'hierarchical' => false,
                'translation' => [
                    'fields' => [
                        'name' => [
                            'type' => 'text',
                            'label' => 'selora::base.taxonomy_type.order_status.translation.name.label',
                            'info' => 'selora::base.taxonomy_type.order_status.translation.name.info',
                            'placeholder' => 'selora::base.taxonomy_type.order_status.translation.name.placeholder',
                        ],
                        'description' => [
                            'type' => 'textarea',
                            'label' => 'selora::base.taxonomy_type.order_status.translation.description.label',
                            'info' => 'selora::base.taxonomy_type.order_status.translation.description.info',
                            'placeholder' => 'selora::base.taxonomy_type.order_status.translation.description.placeholder',
                            'validation' => 'string|nullable|sometimes',
                        ],
                    ],
                ],
                'has_base_media' => true,
                'configuration' => [
                    'list' => [
                        'show_description' => true,
                        'filter' => true,
                        'change_status' => true,
                        'import' => true,
                        'export' => true,
                    ],
                ],
            ],
        ]);
    }
}
