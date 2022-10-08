<?php
// 创建一个数组
$array = array(1, 2, 3, 5648, 71, 6, 79, 4);
// var_dump($array);
// array_push() 添加内容到数组最后
// array_push($array, 6);

// array_unshift() 插入到数组最前面
// array_unshift($array, 666);
// print_r($array);

// array_pop() 删除数组最后一个元素
// array_pop($array);
// print_r($array);

// array_shift() 删除数组第一个元素
// array_shift($array);
// print_r($array);


// 数组排序
// sort() 升序 从小到大
sort($array);
print_r($array);

// implode() 将数组转化为字符串
// echo implode(",", $array);

// 将字符串转化为数组
// $string = "1,5,6,4,kkk";
// print_r(explode(',', $string));
