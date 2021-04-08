<?php
declare(strict_types=1);

interface DataSource
{
    public function open();

    public function read();

    public function close();
}