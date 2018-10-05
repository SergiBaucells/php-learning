<?php

namespace App\Framework;

use Exception;

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    public static function resolve($key)
    {
        if (! array_key_exists($key, static::$registry)) {
            throw new Exception("No $key found in registry");
        }

        return static::$registry[$key];
    }

    public static function get($key)
    {
        $oldarray = static::$registry;
        $newarray = array_shift($oldarray);

        //die(var_dump($newarray));
        //var_dump($key);
        if (! array_key_exists($key, $newarray)) {
            //var_dump(static::$registry);
            throw new Exception("No {$key} is bound in the container.");
        }

        return $newarray[$key];
    }
}