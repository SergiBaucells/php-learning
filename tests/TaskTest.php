<?php

use PHPUnit\Framework\TestCase;
require_once('../models/Task.php');

class TaskTest extends TestCase
{

    public function testTaskClass()
    {
        $task = new Task();
        $this->assertInstanceOf(Task::class,$task);
    }

    /**
     * @test
     */
    public function can_create_a_task_with_a_name()
    {
        $task = new Task('Compra pa');
        // Propietats
        $this->assertEquals('Compra pa', $task->name);
        echo $task->name;
    }

    /**
     * @test
     */
    public function can_create_a_task_with_an_status()
    {
        $task = new Task('Compra pa',false);
        // Propietats
        $this->assertEquals('Compra pa', $task->name);
        $this->assertEquals(false, $task->completed);
        echo $task->name;
    }

    /**
     * @test
     */
    public function can_complete_a_task()
    {
        // Preparo
        $task = new Task('Compra pa',false);
        // Executo
        $task->complete();
        // Comprobo
        $this->assertEquals(true, $task->completed);
    }

    /**
     * @test
     */
    public function tasks ()
    {
        // 1. Preparar, 2. Executar, 3. Assert
        require_once('../tasks.php');
    }

}