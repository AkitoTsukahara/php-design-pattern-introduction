<?php
declare(strict_types=1);

interface Text
{
    public function getText(): String;

    public function setText(String $string);
}
