<?php

namespace JobMetric\Selora\Listeners;

use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Selora\Events\SeloraBootedEvent;

class AddPanelMenuListeners
{
    /**
     * Handle the event.
     */
    public function handle(SeloraBootedEvent $event): void
    {
        Panelio::addPanel('selora', [
            'name' => 'selora::base.panel_name',
            'namespace' => 'JobMetric\Selora\Http\Controllers',
            'args' => [
                'description' => 'selora::base.description',
                'icon' => '<i class="ki-duotone ki-abstract-46 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'selora',
            'position' => 10,
        ]);

        Panelio::addSection('selora', 'content', [
            'name' => 'selora::base.sections.content.name',
            'args' => [
                'title' => 'selora::base.sections.content.title',
                'icon' => '<i class="ki-duotone ki-abstract-26 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'selora.content',
            'position' => 0,
        ]);

        Panelio::addSection('selora', 'sell', [
            'name' => 'selora::base.sections.sell.name',
            'args' => [
                'title' => 'selora::base.sections.sell.title',
                'icon' => '<i class="ki-duotone ki-graph-up fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span></i>',
            ],
            'permission' => 'selora.sell',
            'position' => 0,
        ]);

        Panelio::addSection('selora', 'account', [
            'name' => 'selora::base.sections.account.name',
            'args' => [
                'title' => 'selora::base.sections.account.title',
                'icon' => '<i class="ki-duotone ki-abstract-22 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'selora.account',
            'position' => 0,
        ]);

        Panelio::addSection('selora', 'system', [
            'name' => 'selora::base.sections.system.name',
            'args' => [
                'title' => 'selora::base.sections.system.title',
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'selora.system',
            'position' => 0,
        ]);

        Panelio::addSection('selora', 'report', [
            'name' => 'selora::base.sections.report.name',
            'args' => [
                'title' => 'selora::base.sections.report.title',
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'selora.report',
            'position' => 0,
        ]);

        // added menu for content section
        Panelio::addMenu('selora', 'content', [
            'type' => 'group',
            'name' => 'selora::base.sections.content.menus.group_product',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('selora', 'content', [
            'type' => 'link',
            'name' => 'selora::base.sections.content.menus.product_category',
            'link' => route('category.{type}.index', [
                'panel' => 'selora',
                'section' => 'content',
                'type' => 'product_category',
            ]),
            'icon' => '<i class="ki-duotone ki-note-2 {class}"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('selora', 'content', [
            'type' => 'group',
            'name' => 'selora::base.sections.content.menus.group_content',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('selora', 'content', [
            'type' => 'group',
            'name' => 'selora::base.sections.content.menus.group_menu',
            'permission' => '',
            'position' => 200,
        ]);

        // added group menu for sale section
        Panelio::addMenu('selora', 'sell', [
            'type' => 'group',
            'name' => 'selora::base.sections.sell.menus.group_sell',
            'permission' => '',
            'position' => 0,
        ]);

        Panelio::addMenu('selora', 'sell', [
            'type' => 'group',
            'name' => 'selora::base.sections.sell.menus.group_advertising_and_marketing',
            'permission' => '',
            'position' => 100,
        ]);

        Panelio::addMenu('selora', 'sell', [
            'type' => 'group',
            'name' => 'selora::base.sections.sell.menus.group_financial_management',
            'permission' => '',
            'position' => 200,
        ]);

        // added group menu for account section
        Panelio::addMenu('selora', 'account', [
            'type' => 'group',
            'name' => 'selora::base.sections.account.menus.group_customer',
            'permission' => '',
            'position' => 0,
        ]);

        // added group menu for system section
        Panelio::addMenu('selora', 'system', [
            'type' => 'group',
            'name' => 'selora::base.sections.system.menus.group_plugins_and_modules',
            'permission' => '',
            'position' => 100,
        ]);
    }
}
