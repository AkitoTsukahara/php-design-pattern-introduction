<?php
declare(strict_types=1);

class ListDisplay extends AbstractDisplay
{

    protected function displayHeader(): void
    {
        echo '<dl>';
    }

    protected function displayBody(): void
    {
        foreach ($this->getData() as $key => $value) {
            echo '<dt>Item ' . $key . '</dt>';
            echo '<dd>' . $value . '</dd>';
        }
    }

    protected function displayFooter(): void
    {
        echo '</dl>';
    }
}
