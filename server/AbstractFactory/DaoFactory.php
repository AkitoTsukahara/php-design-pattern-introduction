<?php
declare(strict_types=1);

interface DaoFactory
{
    public function createItemDao();

    public function createOrderDao();
}