<?php
declare(strict_types=1);

interface ItemDao
{
    public function findById($item_id);
}