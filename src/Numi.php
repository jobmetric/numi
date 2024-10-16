<?php

namespace JobMetric\Numi;

use Illuminate\Contracts\Foundation\Application;

class Numi
{
    /**
     * The application instance.
     *
     * @var Application
     */
    protected Application $app;

    /**
     * Create a new Numi instance.
     *
     * @param Application $app
     */
    public function __construct(Application $app)
    {
        $this->app = $app;
    }
}
