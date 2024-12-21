<?php

namespace JobMetric\Selora\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        \JobMetric\Selora\Events\SeloraBootedEvent::class => [
            \JobMetric\Selora\Listeners\AddSettingTypeListeners::class,
            \JobMetric\Selora\Listeners\AddTaxonomyTypeListeners::class,
            \JobMetric\Selora\Listeners\AddPanelMenuListeners::class,
        ],

        /*\JobMetric\Taxonomy\Events\TaxonomyTypeEvent::class => [
            \JobMetric\Selora\Listeners\AddTaxonomyTypeProductCategoryListeners::class,
            \JobMetric\Selora\Listeners\AddTaxonomyTypeBlogCategoryListeners::class,
            \JobMetric\Selora\Listeners\AddTaxonomyTypeOrderStatusListeners::class,
        ],*/
    ];
}
