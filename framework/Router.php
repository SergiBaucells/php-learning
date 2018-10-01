<?php

namespace App\Framework;

class Router
{
    private static $routes = [];

    public static function routes()
    {
        return self::$routes;
    }

    public static function define($routes)
    {
        self::$routes=$routes;
    }

    public static function execute($controller,$method)
    {
        $controller = new $controller;
        $controller->$method;
    }

    public static function direct($uri, $requestType)
    {
        if (array_key_exists($uri, self::$routes[$requestType])) {
            return self::callAction(
                ...explode('@', self::$routes[$requestType][$uri]['controller'])
            );
        }
        throw new Exception('Ruta no definida per a esta URI.');
    }

    protected static function callAction($controller, $action)
    {

        $controller = "App\\Controllers\\{$controller}";
        $controller = new $controller;

        if (! method_exists($controller, $action)){
            throw new Exception(
                "El {$controller} no respon a l'acció {$action}"
            );
        }
        return $controller->$action();
    }

}