<?php

namespace FreddieDfre\AfricasTalkingLaravel5;

use Illuminate\Support\Facades\Facade;

/**
 * CountriesFacade
 *
 */ 
class AfricasTalkingLaravel5Facade extends Facade {
 
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor() { return 'AfricasTalkingGateway'; }
 
}