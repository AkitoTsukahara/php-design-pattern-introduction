<?php
declare(strict_types=1);


class UpperCaseText extends TextDecorator
{
    public function __construct(Text $target)
    {
        parent::__construct($target);
    }

    public function getText():String
    {
        $string = parent::getText();
        $string = mb_strtoupper($string);
        return $string;
    }
}
