<?php
declare(strict_types=1);


class ItemDataContext
{
    private $strategy;

    /**
     * @param ReadItemDataStrategy ReadItemDataStrategyオブジェクト
     */
    public function __construct(ReadItemDataStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    /**
     * @return データオブジェクトの配列
     */
    public function getItemData()
    {
        return $this->strategy->getData();
    }
}
