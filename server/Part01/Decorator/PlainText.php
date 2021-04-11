<?php
declare(strict_types=1);

class PlainText implements Text
{
    private $textString = null;

    public function getText(): String
    {
        return $this->textString;
    }

    public function setText(string $string)
    {
        $this->textString = $string;
    }
}
