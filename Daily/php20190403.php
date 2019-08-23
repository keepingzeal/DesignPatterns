<?php
$str = 'abccdefg';
// echo strrchr($str, 'c');
// echo floor(3.2);
// echo ceil(3.2);
// echo pow(2,3);
echo '<br>';
// echo sqrt(4);
// echo str_shuffle($str);

echo '<br>';
// $a = 1;
// $b = 2;
// $c = 3;
// echo max($a,$b,$c);
// echo min($a,$b,$c);

$x = 78898.8323;
// echo number_format($x);

// date_default_timezone_set('Asia/ShangHai');
// echo date('Y年m月d日', time()-86401);

// echo date_default_timezone_get();

// echo (time() - strtotime('-3 weeks')) / 86400;

// echo date('Y-m-d', strtotime('first day of -1 month'));
// echo date('Y-m-d', strtotime('last day of -1 month'));


// echo strtotime('last day of 1998-02');

// echo microtime(true);
// echo uniqid();

// gmstrftime(format)
// date_default_timezone_set('Asia/Shanghai');
setlocale(LC_ALL,"zh_cn.UTF8");
echo(strftime("%H:%M:%S", 0)."<br>");
// echo(strftime("%Y %B %d  %A  %X %Z"));


// $start = 0;
// $intrval = 1800;
// $times = [];
// while ($start < 86400) {
// 	$end = $start + $intrval;
// 	$times[] = [
// 		'time' => gmstrftime('%H:%M:%S', $start) . ' - ' . gmstrftime('%H:%M:%S', $end),
// 		'entry' => 0,
// 		'outflow' => 0,
// 	];
// 	$start = $end;
// }
// var_dump($times);
