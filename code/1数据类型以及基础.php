<h1>
    <!-- 可以在html中嵌套php -->
    <?php
    echo 'hello worldd';
    ?>
</h1>

<?php
// php区域可以写多个 因为php是脚本语言
// 也可以在php中嵌套html 
echo '<h1>也可以在php中嵌套html</h1>'
?>


<!-- 在只有php的页面时可以不写php的闭合标签 -->
<?php
// print也可以打印到网页 但一般都用echo
// 因为echo速度比print快 并且echo返回空 print返回布尔值1
print "whats your name?<br>";
?>

<?php
// 单行注释
#单行注释
/* 
多行注释
 */
?>

<?php
# 变量 variables
$output = "hello world<br>";
// $output就是一个变量
echo $output;

// 变量规则
// 1.前缀$
// 2.以字母或者下划线开头
// 3.由字母/数字/下划线组成
// 4.驼峰命名法
// 5.大小写敏感


// 数据类型
/* 
String
Integer
Float
Boolean
Array
Object
Null
Resource
 */
$string = "llllll<br>";
$number = 5;
$float = 5.5;
// echo true打印1 echo false打印为空
$bool = false;
echo $bool;



//  数值相加
$num1 = 7;
$num2 = 7;
echo ($num1 + $num2) . "<br>";
//返回14

// 字符串拼接
$string1 = "hello";
$str2 = "world";
// .表示拼接字符串
echo $string1 . $str2 . "<br>";


// 单引号 & 双引号
// 单引号中的内容都会被当做字符串
// 双引号中的内容中如果有变量是可以被解析的
echo '$string1 $str2<br>';
echo "$string1 $str2<br>";


// 转义字符 跟c中一样
// 当要用两层引号时 外侧用双引号内侧用单引号
echo "ther ar ' 666<br>";
echo 'ther ar \' 666<br>';


// 常量以键值对的方式定义
// 第三个参数true表示可以用小写调用
define('NUM', 65, true);
echo NUM . "<br>";
// echo num . "<br>";
?>