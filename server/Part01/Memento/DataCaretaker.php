<?php
declare(strict_types=1);

class DataCaretaker
{
    public function __construct()
    {
        if (!isset($_SESSION)) {
            session_start();
        }
    }

    public function setSnapshot($snapshot)
    {
        $this->snapshot = $snapshot;
        $_SESSION['snapshot'] = $this->snapshot;
    }

    public function getSnapshot()
    {
        return (isset($_SESSION['snapshot']) ? $_SESSION['snapshot'] : null);
    }
}
