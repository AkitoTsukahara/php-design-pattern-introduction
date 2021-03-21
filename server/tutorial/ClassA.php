<?php
declare(strict_types=1);

abstract class ClassA
{
    private $attribute1;

    public abstract function operation1();

    public function operation2()
    {
        return true;
    }
}