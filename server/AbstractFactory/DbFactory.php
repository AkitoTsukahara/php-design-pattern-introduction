<?php
declare(strict_types=1);

class DbFactory implements DaoFactory
{

    public function createItemDao()
    {
        return new DbItemDao();
    }

    public function createOrderDao()
    {
        return new DbOrderDao($this->createItemDao());
    }
}