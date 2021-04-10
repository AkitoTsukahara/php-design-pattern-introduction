<?php
declare(strict_types=1);

class ClassD implements InterfaceC
{

    public function operation3(ClassA $param): int
    {
        // TODO: Implement operation3() method.
        $return_value = 0;

        return $return_value;
    }

    public static function operation4()
    {
        return new ClassE();
    }
}