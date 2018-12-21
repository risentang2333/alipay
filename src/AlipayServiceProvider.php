<?php

namespace Risentang\Alipay;

use Risentang\Alipay\Alipay;
use Illuminate\Support\ServiceProvider;

/**
 * Class AlipayServiceProvider
 * @package Mews\Alipay
 */
class AlipayServiceProvider extends ServiceProvider {

    /**
     * Boot the service provider.
     *
     * @return null
     */
    public function boot()
    {

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind alipay
        $this->app->bind('alipay', function($app)
        {
            return new Alipay();
        });
    }

}
