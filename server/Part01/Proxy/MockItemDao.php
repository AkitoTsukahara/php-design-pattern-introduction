<?php
declare(strict_types=1);


class MockItemDao implements ItemDao
{
    public function findById($item_id)
    {
        $item = new Item($item_id, 'ダミー商品');
        return $item;
    }
}