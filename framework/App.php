<?php

namespace App\Framework;

class App
{
    private static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public function resolve($key)
    {
        if (!array_key_exists($key, static::$registry)) throw new Exception("No $key found in registry");
        return static::$registry[$key];
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No {$key} is bound in the container.");
        }
        return static::$registry[$key];
    }

}