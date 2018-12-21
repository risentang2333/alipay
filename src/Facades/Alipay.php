<?php

namespace Risentang\Alipay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mews\Captcha
 */
class Alipay extends Facade {

    /**
     * @return string
     */
    protected static function getFacadeAccessor() { return 'alipay'; }

}
