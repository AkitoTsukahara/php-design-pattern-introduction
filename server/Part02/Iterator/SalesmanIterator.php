<?php
declare(strict_types=1);


class SalesmanIterator extends FilterIterator
{
    public function __construct($iterator)
    {
        parent::__construct($iterator);
    }

    public function accept()
    {
        $employee = $this->getInnerIterator()->current();
        return ($employee->getJob() === 'SALESMAN');
    }
}
