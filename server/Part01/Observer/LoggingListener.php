<?php
declare(strict_types=1);

class LoggingListener implements CartListener
{
    public function __construct()
    {
    }

    public function update(Cart $cart)
    {
        echo '<pre>';
        var_dump($cart->getItems());
        echo '</pre>';
    }
}
