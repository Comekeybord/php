<?php
// Array ： 存储多个数值的变量

// // 1.下标数组
// // 用array方法定义
// $people = array('Kevin', 'Henry', 'Bucky');
// $ids = array(1, 2, 3);
// // 直接通过[]赋值
// $cars = ['兰博基尼', '法拉利', '劳斯莱斯'];
// // 添加内容到数组
// $cars[3] = '奔驰';
// echo $cars[3];
// // $cars[]='宝马' 直接添加到数组最后
// $cars[] = '宝马';

// //计算数组元素个数方法 count
// echo count($cars);

// // 直接打印数组的方法
// print_r($cars);

// // 万能打印的方法 var_dump($cars) 不常用
// var_dump($cars);

// // 数组允许自定义下标 $arr[num]的形式都是往数组最后一个位置添加并且下标可以自定义
// $arr[0] = 'shell.php/';
// $arr[2] = 'jpg';
// // 数组中不存在的如果调用在php高版本会报错 但是低版本会返回空
// echo $arr[1];
// print_r($arr);


// 2.关联数组 常用 类似于对象
$person = array("Henry" => 35, "Bucky" => 30, "Brand" => 27);
echo $person["Henry"];
$ids = array(1 => "Henry", 2 => "Bucky");
echo $ids[1];
// 关联数组添加内容 这种方式是添加到数组最后
$person["Bill"] = 40;
print_r($person);


// 多维数组
$cars = array(
    array("Honda", 20, 10),
    array("Toyoto", 20, 10),
    array("Ford", 20, 10),
);
echo $cars[2][0];
