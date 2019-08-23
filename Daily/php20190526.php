<?php
$a = range(1, 9);
$a1 = range(9, 19);
// var_dump($a);

$tb = 'asdf';
$b = compact('tb');
// var_dump($b);

$c = array_fill(0, 9, $a);
// var_dump($c);


$d = array_fill_keys($a, 2);
// var_dump($d);


$e = array_key_exists(5,$a);
// echo $e;

echo next($a);
echo key($a);

