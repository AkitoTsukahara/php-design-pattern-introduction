<?php
declare(strict_types=1);

class MockFactory implements DaoFactory
{
    public function createItemDao()
    {
        return new MockItemDao();
    }

    public function createOrderDao()
    {
        return new MockOrderDao();
    }
}