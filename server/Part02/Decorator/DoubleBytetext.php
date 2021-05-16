<?php
declare(strict_types=1);


class DoubleBytetext extends TextDecorator
{
    public function __construct(Text $target)
    {
        parent::__construct($target);
    }

    public function getText(): String
    {
        $string = parent::getText();
        $string = mb_convert_kana($string,"RANSKV");
        return $string;
    }
}
