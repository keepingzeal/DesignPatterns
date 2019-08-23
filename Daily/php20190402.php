<?php
// 斐波那契
function nqbl($n) {
	if ($n <= 1) {
		return 1;
	}
	return nqbl($n-1)+nqbl($n-2);
}

// echo nqbl(11);


// 卢卡斯
function lks($n) {
	if ($n <= 1) {
		return 1;
	} elseif ($n <= 2) {
		return 3;
	}
	return lks($n-1)+lks($n-2);
}

// echo lks(11);


// PHP7---null合并运算
$str = $_GET['ceshi'] ?? 'meiceshi';
// echo $str;


// php5中有没有这种简便的写法呢？  有的
// $str = $_GET['ceshi2'] ?: 'meceshi2';
// echo $str; //缺点，如果$_GET没有ceshi2的话，则会报错

$wzl = 'foo';

$foo = array(

'bar'=>array('baz'=>'wzl'),

);

echo $$wzl['bar']['baz'];//会报错

// $foo = 'wzl';

// $wzl = array(

// 'bar'=>array('baz'=>'wzl'),

// );

// echo $$foo['bar']['baz'];//不会报错

