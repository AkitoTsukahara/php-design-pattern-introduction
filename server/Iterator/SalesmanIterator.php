<?php
declare(strict_types=1);

class SalesmanIterator extends FilterIterator
{
    public function __construct($iterator)
    {
        parent::__construct($iterator);
    }

    /**
     * イテレータの現在の要素がフィルタを満たすかどうかを調べる
     * ラップすることで独自の条件を実装することができる。
     * @return bool
     */
    public function accept()
    {
        $employee = $this->getInnerIterator()->current();
        return ($employee->getJob() === 'SALESMAN');
    }

}
