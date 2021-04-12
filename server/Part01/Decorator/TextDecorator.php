<?php
declare(strict_types=1);


abstract class TextDecorator implements Text
{
    private $text;

    public function __construct(Text $target)
    {
        $this->text = $target;
    }

    public function getText(): String
    {
        return $this->text->getText();
    }

    public function setText($string)
    {
        $this->text->setText($string);
    }
}
