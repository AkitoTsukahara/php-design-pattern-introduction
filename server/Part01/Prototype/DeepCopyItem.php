<?php
declare(strict_types=1);

class DeepCopyItem extends ItemPrototype
{
    protected function __clone()
    {
        $this->setDetail(clone $this->getDetail());
    }
}
