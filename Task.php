<?php

class Task
{
    public $title;
    public $description;
    public $completed = false;

    public function __construct($description, $title=[])
    {
        $this->description = $description;
        $this->title = $title;
    }

    public function complete()
    {
        $this->completed = true;
    }
}

$task = new Task('Wayside Estate', 'Kisumu estates');

$task->complete();

var_dump( $task->title, $task->description);

// var_dump($task);
