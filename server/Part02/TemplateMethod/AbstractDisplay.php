<?php
declare(strict_types=1);

abstract class AbstractDisplay
{
    private $data;

    public function __construct($data)
    {
        if (!is_array($data)) {
            $data = array($data);
        }
        $this->data = $data;
    }

    public function display()
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    public function getData()
    {
        return $this->data;
    }

    protected abstract function displayHeader(): void;

    protected abstract function displayBody(): void;

    protected abstract function displayFooter(): void;
}
