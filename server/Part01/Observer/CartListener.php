<?php
declare(strict_types=1);

interface CartListener
{
    public function update(Cart $cart);
}
