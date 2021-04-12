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

    public function display(): string
    {
        $this->displayHeader();
        $this->displayBody();
        $this->displayFooter();
    }

    public function getData(): array
    {
        return $this->data;
    }

    protected abstract function displayHeader(): string;

    protected abstract function displayBpdy(): string;

    protected abstract function diplayFooter(): string;
}