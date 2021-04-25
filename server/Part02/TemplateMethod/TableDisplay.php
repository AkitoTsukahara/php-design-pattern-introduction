<?php
declare(strict_types=1);

class TableDisplay extends AbstractDisplay
{

    protected function displayHeader(): void
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    protected function displayBody(): void
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    protected function displayFooter(): void
    {
        echo '</table>';
    }
}
