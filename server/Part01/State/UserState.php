<?php
declare(strict_types=1);

interface UserState
{
    public function isAuthenticated();

    public function nextState();

    public function getMenu();
}
