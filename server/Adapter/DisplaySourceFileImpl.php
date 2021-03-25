<?php
declare(strict_types=1);

/**
 * DisplaySourceFileを実装したクラス
 * Class DisplaySourceFileImpl
 */
class DisplaySourceFileImpl extends ShowFile implements DisplaySourceFile
{

    public function __construct($filename)
    {
        try {
            parent::__construct($filename);
        } catch (Exception $e) {
        }
    }

    public function display()
    {
        parent::showHighlight();
    }
}