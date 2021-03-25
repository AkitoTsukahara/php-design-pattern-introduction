<?php
declare(strict_types=1);

/**
 * 指定されたファイルの内容を表示するクラス
 */
class ShowFile
{
    private $fileame;

    public function __construct($filename)
    {
        if (!is_readable($filename)) {
            throw new Exception('file "' . $filename . '" is not readable !');
        }
        $this->fileame = $filename;
    }

    public function showPlain()
    {
        echo '<pre>';
        echo htmlspecialchars(file_get_contents($this->filename), ENT_QUOTES, mb_internal_encoding());
        echo '</pre>';
    }

    public function showHighlight()
    {
        highlight_file($this->fileame);
    }
}