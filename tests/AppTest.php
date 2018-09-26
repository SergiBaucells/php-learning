<?php

use PHPUnit\Framework\TestCase;

class AppTest extends TestCase {
    /**
     * @test
     */
    public function check_container_can_bind_and_resolve()
    {
        // 1 Prepare

        // 2 execute
        // IOC -> Inversion Of Control Container
//        App::bind() // set
        // App::resolve() -> get
        $config = [
            'database' => [
                'type' => 'mysql',
                'host' => '127.0.0.1',
                'name' => 'php_learning',
                'user' => 'debian-sys-maint',
                'password' => 'DOd3NQfVnIUYBb0e',
                'options' => [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ],
            ]
        ];
        App::bind('config', $config);

        // Representara (el estat) la meva aplicació

        // Database
        // Config
        // cache
        // Routes

        // 3 assert
//        $app->registry = [ 'config' => $config];

//        $this->assertTrue($config === App::resolve('config'));
        $this->assertEquals($config,App::resolve('config'));

    }

    /**
     * @test
     */
    public function throws_an_error_when_trying_to_acess_an_unexisting_value ()
    {
        try {
            App::resolve('config');
        } catch (Exception $e) {
            $this->assertEquals($e->getmessage(),'No config found in registry');
        }

    }
}

