<?php
declare(strict_types=1);

final class Data extends DataSnapshot
{
    private $comment;

    public function __construct($comment)
    {
        $this->comment = array();
    }

    public function takeSnapshot()
    {
        return new DataSnapshot($this->comment);
    }

    public function restoreSnapshot(DataSnapshot $snapshot)
    {
        $this->comment = $snapshot->getComment();
    }

    public function addComment($comment)
    {
        $this->comment[] = $comment;
    }

    public function getComment()
    {
        return $this->comment;
    }
}
