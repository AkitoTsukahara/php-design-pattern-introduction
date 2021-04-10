<?php
declare(strict_types=1);

$order = new Order();
$item_dao = ItemDao::getInstance();

$order->addItem(new OrderItem($item_dao->findById(1), 2));
$order->addItem(new OrderItem($item_dao->findById(2), 1));
$order->addItem(new OrderItem($item_dao->findById(3), 3));

OrderManager::order($order);
