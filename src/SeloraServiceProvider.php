<?php

namespace JobMetric\Selora;

use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\Exceptions\ViewFolderNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;
use JobMetric\Panelio\RouteRegistry;
use JobMetric\Selora\Providers\EventServiceProvider;

class SeloraServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     * @throws ViewFolderNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('selora')
            ->hasConfig()
            ->hasTranslation()
            ->hasView()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Selora', Selora::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterRegisterPackage(): void
    {
        RouteRegistry::addPanel($this->package);
    }

    public function afterBootPackage(): void
    {
        Panelio::addPanel('selora', [
            'name' => 'selora::base.panel_name',
            'namespace' => 'JobMetric\Selora\Http\Controllers',
            'args' => [
                'description' => 'selora::base.description',
                'icon' => '<i class="ki-duotone ki-abstract-46 fs-2x"><span class="path1"></span><span class="path2"></span></i>',
            ],
            'permission' => 'selora',
            'position' => 0,
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
    }
}
