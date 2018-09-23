<?php

use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testHelloWorld ()
    {
        require('../hello.php');
        $this->expectOutputString('Hola Pepe');
    }

    public function testHelloWorld2 ()
    {
        require('../hello2.php');
        $this->expectOutputString('Hola mon');
    }

//    public function testMyFunction() {
//        include_once 'path/to/script.php';
//        $result = someFunction();
//
//        $this->assertEquals('expected result', $result);
//    }
}