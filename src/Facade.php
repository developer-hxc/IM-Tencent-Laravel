<?php
namespace HXC\IM;

use \Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Class Facade
 * @package HXC\LaravelGenerate
 */
class Facade extends LaravelFacade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'hxcim.tx';
    }
}