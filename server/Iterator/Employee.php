<?php
declare(strict_types=1);

class Employee
{
    private $name;
    private $age;
    private $job;

    public function __construct($name, $age, $job)
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getJob()
    {
        return $this->job;
    }

}
