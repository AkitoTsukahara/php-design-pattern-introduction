<?php
declare(strict_types=1);

$queue = new Queue();
$file = new File("sample.txt");
$queue->addCommand(new TouchCommand($file));
$queue->addCommand(new CompressCommand($file));
$queue->addCommand(new CopyCommand($file));

$queue->run();
