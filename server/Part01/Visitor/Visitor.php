<?php
declare(strict_types=1);


interface Visitor
{
    public function visit(OrganizationEntry $entry);
}
