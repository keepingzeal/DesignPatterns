<?php
 // $data = [];
 // $data[-1] = 111;
 // $data[-2] = 222;
 // $data[] = 444;
 // print_r($data);

// $aaa = ['a', 'b', 'c'];
// $bbb = ['a', 'b', 'c'];
// var_dump($aaa+$bbb);
// $arr = [
// 	'a' => [
// 		'aa' => [
// 			'id' => 2,
// 		],
// 		'bb' => [
// 			'id' => 3,
// 		],
// 		'cc' => [
// 			'id' => 4,
// 		],
// 		'dd' => [
// 			'id' => 5,
// 		],
// 		'ee' => [
// 			'id' => 1,
// 		],
// 	],
// 	'b' => [
// 		'aa' => [
// 			'id' => 5,
// 		],
// 		'bb' => [
// 			'id' => 3,
// 		],
// 		'cc' => [
// 			'id' => 4,
// 		],
// 		'dd' => [
// 			'id' => 1,
// 		],
// 		'ee' => [
// 			'id' => 6,
// 		],
// 	],
// ];
// foreach ($arr as $key => $value) {
// 	$arr_c = $value;
// 	$arr_sort = [];
// 	foreach ($arr_c as $key1 => $value1) {
// 		$arr_sort[] = $value1['id'];
// 	}
// 	array_multisort($arr_sort, SORT_ASC, $arr[$key]);
// }

// print_r($arr);

// $arr = [0,1,2];
// $arr_copy = &$arr;
// foreach ($arr as $val) {
// 	unset($arr[1]);
// }

// var_dump($arr_copy);

$arr = ['a' => 'b', 'c' => 'd'];
$arr2 = ['g' => 'b', 'c' => 'd'];
// print_r($arr ! =$arr2);



print_r(list($a,$b) = each($arr));


