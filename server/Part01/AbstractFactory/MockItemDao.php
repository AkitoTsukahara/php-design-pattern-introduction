<?php
declare(strict_types=1);

class MockItemDao implements ItemDao
{
    public function findById($item_id)
    {
        $item = new Item('99', 'ダミー商品');
        return $item;
    }
}