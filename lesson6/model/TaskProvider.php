<?php

class TaskProvider
{
    private array $tasks;

    public function __construct()
    {
        $this->tasks = [];
    }

    public function getUndoneList(): array
    {
        $tasks = [];
        foreach ($this->tasks as $task) {
            if (!$task->isDone()) {
                $tasks[] = $task;
            }
        }
        return $tasks;
    }

    public function addTask(Task $task): void
    {
        $this->tasks[] = $task;
    }
}
