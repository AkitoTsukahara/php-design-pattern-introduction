<?php
declare(strict_types=1);

class TouchCommand implements Command
{
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }
    
    public function execute()
    {

    }
}
