<?php
// // 定义无参函数
// function simpleFunction()
// {
//     echo "hello world";
// }
// // 调用函数
// simpleFunction();

// // 定义带参函数
// // 如果没有设定默认值并且不传参的话就会报错
// function sayHello($name = 'Henry')
// {
//     echo "hello $name" . '<br>';
// }
// sayHello("Mr.zhou");
// sayHello();

// // 有参数有返回值的函数
// function addNumber($num1, $num2)
// {
//     return $num1 + $num2;
// }
// echo addNumber(1, 2);


// 函数传引用 相当于传别名 把形参的指针也指向实参
$myNum = 10;
function addFive(&$num)
{
    $num += 5;
}
addFive($myNum);
echo $myNum;
