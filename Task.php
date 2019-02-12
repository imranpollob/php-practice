<?php

class Task
{
    public $description;
    protected $is_completed;

    public function __construct($description, $is_completed = 0)
    {
        $this->description = $description;
        $this->is_completed = $is_completed;
    }

    public function makeComplete()
    {
        $this->is_completed = 1;
    }

    public function complete()
    {
        return $this->is_completed;
    }

}