<?php
declare(strict_types=1);

$a = function () {
    echo "hi";
};
$a();
$b = function () {
    return "yes";
};
echo $b();
$c = function ($greet) {
    echo $greet;
};
$c("no");
function execTest(string $word, \Closure $function)
{
    echo "start";
    $function($word);
    echo "finish";
}

$x = 1;
execTest("konnnichiwa", function ($greet) use ($x) {
    echo $greet;
    echo $x;
});
