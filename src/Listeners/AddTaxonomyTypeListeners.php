<?php

namespace JobMetric\Selora\Listeners;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;
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

        // product tag
        TaxonomyType::define('product_tag')
            ->label('selora::base.taxonomy_type.product_tag.label')
            ->description('selora::base.taxonomy_type.product_tag.description')
            //->showDescriptionInList()
            //->removeFilterInList()
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
                            ->label('selora::base.taxonomy_type.product_tag.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.product_tag.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.product_tag.metadata.column_number.placeholder')
                            ->validation('nullable|min:1|max:4');
                    },
                    'hasFilter' => false
                ],
                [
                    'customField' => function (CustomFieldBuilder $customFieldBuilder) {
                        $customFieldBuilder::number()
                            ->name('column_number2')
                            ->label('selora::base.taxonomy_type.product_tag.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.product_tag.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.product_tag.metadata.column_number.placeholder')
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
                            ->label('selora::base.taxonomy_type.product_tag.metadata.column_number.label')
                            ->info('selora::base.taxonomy_type.product_tag.metadata.column_number.info')
                            ->placeholder('selora::base.taxonomy_type.product_tag.metadata.column_number.placeholder')
                            ->disableAutoComplete()
                            ->validation('nullable|min:1|max:4');
                    })->hasFilter();
            });
    }
}
