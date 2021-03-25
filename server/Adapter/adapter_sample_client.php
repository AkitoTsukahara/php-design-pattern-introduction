<?php
declare(strict_types=1);

try {
    $show_file = new ShowFile('./ShowFile.php');
} catch (Exception $e) {
    die($e->getMessage());
}

$show_file->showPlain();
echo '<hr>';
$show_file->showHighlight();