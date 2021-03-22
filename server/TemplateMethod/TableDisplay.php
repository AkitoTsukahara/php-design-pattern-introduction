<?php
declare(strict_types=1);

class TableDisplay extends AbstractDisplay
{

    protected function displayHeader(): string
    {
        echo '<table border="1" cellpadding="2" cellspacing="2">';
    }

    protected function displayBpdy(): string
    {
        foreach ($this->getData() as $key => $value) {
            echo '<tr>';
            echo '<th>' . $key . '</th>';
            echo '<td>' . $value . '</td>';
            echo '</tr>';
        }
    }

    protected function diplayFooter(): string
    {
        echo '</table>';
    }
}