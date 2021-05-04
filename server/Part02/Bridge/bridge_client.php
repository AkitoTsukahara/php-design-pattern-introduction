<?php
declare(strict_types=1);

$list1 = new Listing(new FileDataSource('data.txt'));
$list2 = new ExtendedListing(new FileDataSource('data.txt'));

try {
    $list1->open();
    $list2->open();
} catch (Exception $e) {
    die($e->getMessage());
}

/**
 * 取得したデータの表示（readメソッド）
 */
$data = $list1->read();
echo $data;

/**
 * 取得したデータの表示（readWithEncodeメソッド）
 */
$data = $list2->readWithEncode();
echo $data;

$list1->close();
$list2->close();
