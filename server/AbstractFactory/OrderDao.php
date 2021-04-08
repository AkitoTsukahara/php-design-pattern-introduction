<?php
declare(strict_types=1);

interface OrderDao
{
    public function findById($order_id);
}