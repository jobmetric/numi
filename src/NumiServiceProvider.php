<?php

namespace JobMetric\Numi;

use JobMetric\Numi\Providers\EventServiceProvider;
use JobMetric\PackageCore\Enums\RegisterClassTypeEnum;
use JobMetric\PackageCore\Exceptions\RegisterClassTypeNotFoundException;
use JobMetric\PackageCore\PackageCore;
use JobMetric\PackageCore\PackageCoreServiceProvider;
use JobMetric\Panelio\Facades\Panelio;

class NumiServiceProvider extends PackageCoreServiceProvider
{
    /**
     * @throws RegisterClassTypeNotFoundException
     */
    public function configuration(PackageCore $package): void
    {
        $package->name('numi')
            ->hasConfig()
            ->hasTranslation()
            ->hasRoute()
            ->registerClass('event', EventServiceProvider::class, RegisterClassTypeEnum::REGISTER())
            ->registerClass('Numi', Numi::class, RegisterClassTypeEnum::SINGLETON());
    }

    public function afterBootPackage(): void
    {
        Panelio::addPanel('numi', [
            'name' => config('numi.panel_name'),
            'namespace' => 'JobMetric\Numi\Http\Controllers',
            'args' => [
                'description' => trans('numi::base.description'),
                'icon' => 'fas fa-user-shield',
            ],
            'permission' => 'numi',
            'position' => 0,
        ]);

        Panelio::addSection('numi', 'info', [
            'name' => trans('numi::base.sections.info.name'),
            'args' => [
                'title' => trans('numi::base.sections.info.title'),
                'icon' => '<i class="ki-duotone ki-information-4 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span></i>',
            ],
            'permission' => 'numi.info',
            'position' => 0,
        ]);

        Panelio::addSection('numi', 'accounting', [
            'name' => trans('numi::base.sections.accounting.name'),
            'args' => [
                'title' => trans('numi::base.sections.accounting.title'),
                'icon' => '<i class="ki-duotone ki-finance-calculator fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span><span class="path6"></span><span class="path7"></span></i>',
            ],
            'permission' => 'numi.accounting',
            'position' => 0,
        ]);

        Panelio::addSection('numi', 'system', [
            'name' => trans('numi::base.sections.system.name'),
            'args' => [
                'title' => trans('numi::base.sections.system.title'),
                'icon' => '<i class="ki-duotone ki-setting-3 fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span><span class="path5"></span></i>',
            ],
            'permission' => 'numi.system',
            'position' => 0,
        ]);

        Panelio::addSection('numi', 'report', [
            'name' => trans('numi::base.sections.report.name'),
            'args' => [
                'title' => trans('numi::base.sections.report.title'),
                'icon' => '<i class="ki-duotone ki-chart-simple fs-2x"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>',
            ],
            'permission' => 'numi.report',
            'position' => 0,
        ]);
    }
}
