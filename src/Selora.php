<?php

namespace JobMetric\Selora;

use Illuminate\Contracts\Foundation\Application;

class Selora
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Selora instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
