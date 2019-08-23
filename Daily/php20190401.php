<?php
//有若干id($arr1),我需要他们在另一张表的value。另一张表的数据已经查出来了($arr2).
$arr1 = ['a'=>'A', 'b'=>'B', 'c'=>'C'];
$arr2 = ['a','c'];


// print_r(array_intersect_key($arr1, array_flip($arr2)));
// echo "\n";
// print_r(implode(',', array_intersect_key($arr1, array_flip($arr2))));
// echo "\n";
// echo "\n";
// print_r(array_values((array_intersect_key($arr1, array_flip($arr2)))));


// 最近制作RBAC管理模块，处理对RBAC节点的控制，现在手上有2张表，一个menu（一二级菜单）、一个node(节点)，现在把他们都查询出来，我得进行处理才能转换为菜单。最开始我是用了3个foreach循环得到结果，后来只要用一个就可以了。
// 注意：这里有个很重要的原因，就是数组的key对应着value
// 先看看数据：






