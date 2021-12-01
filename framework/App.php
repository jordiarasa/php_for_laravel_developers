<?php

namespace framework;

class App
{
    private static $container = [];

    public static function bind($key, $value)
    {
        static::$container[$key] = $value;
    }


    public static function get($key)
    {
        if(!array_key_exists($key, static::$container))
        {
            throw new \Exception("No {$key} is bound in the container");
        }
        return static::$container[$key];
    }

}