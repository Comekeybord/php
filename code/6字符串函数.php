<?php
// // substr 返回字符串的一部分 第二个参数不输就是截取到最后
// $output = substr("hello", 1, 3); //从下标为1开始截取三位
// $output = substr("string", -2); //截取最后两位
// // echo $output;

// srtlen() 返回字符串长度
// $output = "   hello   ";
// echo strlen($output);

// strpos() 查找字符串中第一次出现的位置下标
// echo strpos($output, "o");

// strrpos() 返回最后出出现的位置下标
// echo strrpos($output, 'l');

// trim() 去除首位空格
// var_dump(trim($output));


// strtoupper() 字符串转为大写
// echo strtoupper($output);

// strtolower() 字符串转为小写
// $output2 = "SDJKFJKD";
// echo strtolower($output2);

// ucwords() 将字符串中单词的首字母都变为大写
// $words = "hello world";
// echo ucwords($words);

// str_replace() 替换所匹配的所有内容
// $text = "Hello Hello World";
// echo str_replace("Hello", 'what is', $text);

// is_string() 判断是否是字符串
// $var = 1;
// echo is_string($var);//是字符串返回1 为true 不是字符串返回空为假

// 过滤掉数组中非字符串的值
// $people = ['zs', 'ls', 1, 2, 5, 6, 'wz'];
// foreach ($people as  $item) {
//     // 如果不是字符串就跳过这次循环
//     if (!is_string($item)) continue;
//     echo $item;
// }


// gzcompress() 字符串压缩
$string = "sdfsdfasdddsdfasddddddddddddddddfsdfasdfadfadsfasdf";
$compressed = gzcompress($string);
echo $compressed;
// gzuncompress() 字符串解压
echo gzuncompress($compressed);
