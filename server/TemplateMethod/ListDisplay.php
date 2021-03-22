<?php
declare(strict_types=1);

class ListDisplay extends AbstractDisplay
{

    protected function displayHeader(): string
    {
        echo '<dl>';
    }

    protected function displayBpdy(): string
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    protected function diplayFooter(): string
    {
        echo '</dl>';
    }
}