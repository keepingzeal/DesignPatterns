<?php
// $str = 'aDFD.acdd.adfs';
// // echo htmlspecialchars($str);
// // echo substr($str, strrpos($str, '.')+1);

// // echo ucwords($str, '.');
// function cut_str($str, $sign, $num) {
// 	$arr = explode($sign, $str);
// 	if (!is_array($arr)) {
// 		return 501;
// 	}
// 	$length = count($arr);
// 	if ($num < 0 && abs($num) < $length) {
// 		return $arr[abs($num)];
// 	} else if ($num > 0 && $num <= $length){
// 		return $arr[$num];
// 	}
// 	return 502;
// }

// // print_r(cut_str($str, '.', 2));
// 电信卡
// echo strstr('123.456', '.');
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange");
array_splice($a1,2);
// array_splice($a1,0,0,$a2);
// print_r($a1);


$address = 'One Infinite Loop, Cupertino 95014';
$cityZipCodeRegex = '/^[^,]+,\s*(.+?)\s*(\d{5})$/';
preg_match($cityZipCodeRegex, $address, $matches);
[, $city, $zipCode] = $matches;
// var_dump($matches);


$address = 'One Infinite Loop, Cupertino 95014';
$cityZipCodeRegex = '/^[^,]+,\s*(?<city>.+?)\s*(?<zipCode>\d{5})$/';
preg_match($cityZipCodeRegex, $address, $matches);


// print_r($matches);
