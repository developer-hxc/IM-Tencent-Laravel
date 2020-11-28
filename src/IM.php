<?php

namespace HXC\IM;

use HXC\IM\Gateway\Base;
use HXC\IM\Provider\TX;

/**
 * Class IM
 * @package HXC\IM
 * @method static TX TX($config = []) 腾讯im
 */
class IM
{
    private $config;

    /**
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public static function __callStatic($name, $arguments)
    {
        $app = new self(...$arguments);
        return $app->make($name);
    }

    /**
     * IM constructor.
     * @param array $params
     */
    public function __construct($params = [])
    {
        $this->config = $params;
    }

    /**
     * @param $class
     * @return mixed
     */
    public function make($class)
    {
        $class_name = '\HXC\IM\Provider\\'.$class;

        $app = new $class_name($this->config);
        if($app instanceof Base){
            return $app;
        }

        throw new \Exception('网关错误');
    }
}