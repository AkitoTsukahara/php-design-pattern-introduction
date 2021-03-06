<?php
declare(strict_types=1);

class OrderManager
{
    public static function order(Order $order)
    {
        $item_dao = ItemDao::getInstance();
        foreach ($order->getItems() as $order_item) {
            $item_dao->setAside($order_item);
        }

        OrderDao::createOrder($order);
    }
}
