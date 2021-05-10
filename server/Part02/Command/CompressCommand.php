<?php
declare(strict_types=1);

class CompressCommand implements Command
{
    private $file;

    public function __construct(File $file)
    {
        $this->file = $file;
    }

    public function execute()
    {
        $this->file->compress();
    }
}
