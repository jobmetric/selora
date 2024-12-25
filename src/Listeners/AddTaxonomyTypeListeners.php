<?php

namespace JobMetric\Selora\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Media\ServiceType\MediaBuilder;
use JobMetric\Metadata\ServiceType\Metadata;
use JobMetric\Metadata\ServiceType\MetadataBuilder;
use JobMetric\Selora\Events\SeloraBootedEvent;
use JobMetric\Taxonomy\Facades\TaxonomyType;
use JobMetric\Translation\ServiceType\TranslationBuilder;
use Throwable;

class AddTaxonomyTypeListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(SeloraBootedEvent $event): void
    {
        /*$customFieldBuilder = CustomFieldBuilder::select()
            ->name('column_number')
            ->label('selora::base.taxonomy_type.product_category.metadata.column_number.label')
            ->info('selora::base.taxonomy_type.product_category.metadata.column_number.info')
            ->placeholder('selora::base.taxonomy_type.product_category.metadata.column_number.placeholder')
            ->validation('nullable|min:1|max:4')
            ->options([
                ['value' => 1, 'label' => '1'],
                ['value' => 2, 'label' => '2'],
                ['value' => 3, 'label' => '3', 'selected' => true],
                ['value' => 4, 'label' => '4']
            ]);*/

        // product_category
        TaxonomyType::define('product_category')
            ->label('selora::base.taxonomy_type.product_category.label')
            ->description('selora::base.taxonomy_type.product_category.description')
            ->hierarchical()
            //->showDescriptionInList()
            //->removeFilterInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.product_category.translation.description.label')
                        ->info('selora::base.taxonomy_type.product_category.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.product_category.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            })
            ->seoTranslation()
            ->url()
            ->baseMedia()
            ->media(function (MediaBuilder $mediaBuilder) {
                $mediaBuilder
                    ->collection('gallery')
                    ->mediaCollection('public')
                    ->multiple()
                    ->mimeTypes(['image'])
                    ->size('default', 500, 500)
                    ->size('thumbnail', 100, 100);
            })
            /*->metadata([
                [
                    'customField' => function (CustomFieldBuilder $customFieldBuilder) {
                        $customFieldBuilder::number()
                            ->name('column_number1')
                            ->label('selora::base.taxonomy_type.product_category.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.product_category.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.product_category.metadata.column_number.placeholder')
                            ->validation('nullable|min:1|max:4');
                    },
                    'hasFilter' => false
                ],
                [
                    'customField' => function (CustomFieldBuilder $customFieldBuilder) {
                        $customFieldBuilder::number()
                            ->name('column_number2')
                            ->label('selora::base.taxonomy_type.product_category.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.product_category.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.product_category.metadata.column_number.placeholder')
                            ->validation('nullable|min:1|max:4');
                    },
                    'hasFilter' => true
                ]
            ])*/
            ->metadata(function (MetadataBuilder $metadataBuilder) {
                $metadataBuilder
                    ->customField(function(CustomFieldBuilder $customFieldBuilder){
                        $customFieldBuilder::number()
                            ->name('metadata[column_number]', 'column_number')
                            ->label('selora::base.taxonomy_type.product_category.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.product_category.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.product_category.metadata.column_number.placeholder')
                            ->disableAutoComplete()
                            ->validation('nullable|min:1|max:4');
                    })->hasFilter();
            });

        // blog category
        TaxonomyType::define('blog_category')
            ->label('selora::base.taxonomy_type.blog_category.label')
            ->description('selora::base.taxonomy_type.blog_category.description')
            ->hierarchical()
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.blog_category.translation.description.label')
                        ->info('selora::base.taxonomy_type.blog_category.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.blog_category.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            })
            ->seoTranslation()
            ->url()
            ->baseMedia()
            ->media(function (MediaBuilder $mediaBuilder) {
                $mediaBuilder
                    ->collection('gallery')
                    ->mediaCollection('public')
                    ->multiple()
                    ->mimeTypes(['image'])
                    ->size('default', 500, 500)
                    ->size('thumbnail', 100, 100);
            })
            ->metadata(function (MetadataBuilder $metadataBuilder) {
                $metadataBuilder
                    ->customField(function(CustomFieldBuilder $customFieldBuilder){
                        $customFieldBuilder::number()
                            ->name('metadata[column_number]', 'column_number')
                            ->label('selora::base.taxonomy_type.blog_category.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.blog_category.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.blog_category.metadata.column_number.placeholder')
                            ->disableAutoComplete()
                            ->validation('nullable|min:1|max:4');
                    })->hasFilter();
            });

        // product tag
        TaxonomyType::define('product_tag')
            ->label('selora::base.taxonomy_type.product_tag.label')
            ->description('selora::base.taxonomy_type.product_tag.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.product_tag.translation.description.label')
                        ->info('selora::base.taxonomy_type.product_tag.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.product_tag.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            })
            ->seoTranslation()
            ->url()
            ->baseMedia();

        // customer group
        TaxonomyType::define('customer_group')
            ->label('selora::base.taxonomy_type.customer_group.label')
            ->description('selora::base.taxonomy_type.customer_group.description')
            ->showDescriptionInList()
            ->changeStatusInList()
            ->importInList()
            ->exportInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.customer_group.translation.description.label')
                        ->info('selora::base.taxonomy_type.customer_group.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.customer_group.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });

        // order_status
        TaxonomyType::define('order_status')
            ->label('selora::base.taxonomy_type.order_status.label')
            ->description('selora::base.taxonomy_type.order_status.description')
            ->changeStatusInList()
            ->baseMedia()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.order_status.translation.description.label')
                        ->info('selora::base.taxonomy_type.order_status.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.order_status.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });

        // return_status
        TaxonomyType::define('return_status')
            ->label('selora::base.taxonomy_type.return_status.label')
            ->description('selora::base.taxonomy_type.return_status.description')
            ->changeStatusInList()
            ->baseMedia()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.return_status.translation.description.label')
                        ->info('selora::base.taxonomy_type.return_status.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.return_status.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });

        // return_action
        TaxonomyType::define('return_action')
            ->label('selora::base.taxonomy_type.return_action.label')
            ->description('selora::base.taxonomy_type.return_action.description')
            ->changeStatusInList()
            ->baseMedia()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.return_action.translation.description.label')
                        ->info('selora::base.taxonomy_type.return_action.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.return_action.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });

        // return_reason
        TaxonomyType::define('return_reason')
            ->label('selora::base.taxonomy_type.return_reason.label')
            ->description('selora::base.taxonomy_type.return_reason.description')
            ->changeStatusInList()
            ->baseMedia()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.return_reason.translation.description.label')
                        ->info('selora::base.taxonomy_type.return_reason.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.return_reason.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });

        // tax_class
        TaxonomyType::define('tax_class')
            ->label('selora::base.taxonomy_type.tax_class.label')
            ->description('selora::base.taxonomy_type.tax_class.description')
            ->changeStatusInList()
            ->translation(function (TranslationBuilder $translationBuilder) {
                $translationBuilder->customField(function (CustomFieldBuilder $customFieldBuilder) {
                    $customFieldBuilder::text()
                        ->name('translation[{locale}][description]', 'description')
                        ->label('selora::base.taxonomy_type.tax_class.translation.description.label')
                        ->info('selora::base.taxonomy_type.tax_class.translation.description.info')
                        ->placeholder('selora::base.taxonomy_type.tax_class.translation.description.placeholder')
                        ->validation('string|nullable|sometimes');
                });
            });
    }
}
