<?php

use PHPUnit\Framework\TestCase;

class RouterTest extends TestCase
{
    /**
     * @test
     */
    public function check_returns_tasks_when_uri_is_null()
    {
        $path = Router::direct();
        $this->assertEquals($path,'controllers/tasks.php');
    }

    /**
     * @test
     */
    public function check_returns_tasks_when_uri_is_tasks()
    {
        Router::define(['/tasks' => 'controllers/tasks.php']);

        $path = Router::direct('/tasks');

        $this->assertEquals($path,'controllers/tasks.php');
    }

    /**
     * @test
     */
    public function check_returns_exception_when_uri_is_wrong()
    {
        try {
            Router::direct('/uri_inventada_que_no_existeix');
        } catch (Exception $e) {
            $this->assertEquals("La pàgina que demaneu no existeix",$e->getMessage());
        }
    }

    /**
     * @test
     */
    public function check_returns_exception_when_uri_not_exists()
    {
        try {
            Router::direct('/uri_inventada_que_no_existeix');
        } catch (Exception $e) {
            $this->assertTrue(true);
        }
    }

    /**
     * @test
     */
    public function can_define_routes()
    {
        // 1 Prepare
        $routes = [
            '/' => 'controllers/tasks.php',
            '/prova' => 'controllers/tasks.php',
            '/people' => 'controllers/people.php',
            '/lessons' => 'controllers/lessons.php',
            '/about' => 'controllers/about.php',
            '/contact' => 'controllers/contact.php'
        ];
        // 2
        Router::define($routes);

        // 3
        $this->assertEquals($routes,Router::routes());
    }
}
