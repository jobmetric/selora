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
            ->label('selora::base.setting_type.selora_config.label')
            ->description('selora::base.setting_type.selora_config.description')
            ->form(function(FormBuilder $formBuilder){
                $formBuilder
                    ->tab(function(TabBuilder $tabBuilder){
                        $tabBuilder
                            ->id('general')
                            ->label('selora::base.setting_type.selora_config.tab.general.label')
                            ->selected()
                            ->group(function (GroupBuilder $groupBuilder) {
                                $groupBuilder
                                    ->label('selora::base.setting_type.selora_config.tab.general.group_product_label')
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('selora::base.setting_type.selora_config.tab.general.product_limit')
                                            ->validation('required|integer')
                                            ->name('selora_config_product_limit', 'product_limit');
                                    })
                                    ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                        $customFieldBuilder::text()
                                            ->label('selora::base.setting_type.selora_config.tab.general.comment')
                                            ->name('selora_config_comment', 'comment');
                                    });
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('selora::base.setting_type.selora_config.tab.general.min_gift_cart')
                                    ->name('selora_config_min_gift_cart', 'min_gift_cart');
                            })
                            ->customField(function (CustomFieldBuilder $customFieldBuilder) {
                                $customFieldBuilder::text()
                                    ->label('selora::base.setting_type.selora_config.tab.general.max_gift_cart')
                                    ->name('selora_config_max_gift_cart', 'max_gift_cart');
                            });
                    });
            });

        /*$ss = SettingType::type('selora_config');
        echo '<pre dir="ltr">';
        var_dump($ss->getFormCustomFields());
        echo '</pre>';
        die;*/

    }
}
