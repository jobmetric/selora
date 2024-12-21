<?php

namespace JobMetric\Selora\Listeners;

use JobMetric\CustomField\CustomFieldBuilder;
use JobMetric\Form\FormBuilder;
use JobMetric\Form\Group\GroupBuilder;
use JobMetric\Form\Tab\TabBuilder;
use JobMetric\Selora\Events\SeloraBootedEvent;
use JobMetric\Setting\Facades\SettingType;
use Throwable;

class AddSettingTypeListeners
{
    /**
     * Handle the event.
     * @throws Throwable
     */
    public function handle(SeloraBootedEvent $event): void
    {
        SettingType::define('selora_config')
            ->label('Selora Config Label')
            ->description('Selora Config Description')
            ->form(function(FormBuilder $formBuilder){
                $formBuilder
                    ->action('selora_config')
                    ->tab(function(TabBuilder $tabBuilder){
                        $tabBuilder
                            ->label('Selora Config Tab')
                            ->group(function (GroupBuilder $groupBuilder) {
                                $groupBuilder
                                    ->label('selora_config_text')
                                    ->description('Selora Config Text Description')
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('Group Selora Config Text')
                                            ->name('Group selora_config_text');
                                    })
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('Group Selora Config Text 2')
                                            ->name('Group selora_config_text_2');
                                    });
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('Selora Config Text')
                                    ->name('selora_config_text');
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('Selora Config Text 2')
                                    ->name('selora_config_text_2');
                            });
                    })
                    ->tab(function(TabBuilder $tabBuilder){
                        $tabBuilder
                            ->label('Selora Config Tab 2')
                            ->group(function (GroupBuilder $groupBuilder) {
                                $groupBuilder
                                    ->label('selora_config_text_3')
                                    ->description('Selora Config Text Description 3')
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('Group Selora Config Text 3')
                                            ->name('Group selora_config_text_3');
                                    })
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('Group Selora Config Text 4')
                                            ->name('Group selora_config_text_4');
                                    });
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('Selora Config Text 3')
                                    ->name('selora_config_text_3');
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('Selora Config Text 4')
                                    ->name('selora_config_text_4');
                            });
                    });
            });

        /*$ss = SettingType::type('selora_config');
        echo '<pre dir="ltr">';
        var_dump($ss);
        echo '</pre>';
        die;*/

    }
}
