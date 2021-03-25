<?php
declare(strict_types=1);

class DisplaySourceFileImplTypeB implements DisplaySourceFile
{

    private $show_file;

    public function __construct($filename)
    {
        $this->show_file = new ShowFile($filename);
    }

    public function display()
    {
        $this->show_file->showHighlight();
    }
}