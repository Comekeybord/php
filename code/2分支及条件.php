<?php
// // if switch
// $num = 3;
// if ($num < 3) {
//     // num<3 则执行这里的语句
//     echo "num小于3";
// } else {
//     echo "num大于等于3";
// }

# switch 语句
$favColor = 'skyblues';
switch ($favColor) {
    case 'red':
        echo 'Your favorite color is red';
        break;
    case 'black':
        echo 'Your favorite color is black';
        break;
    case 'skyblue':
        echo 'Your favorite color is skyblue';
        break;
    default:
        echo 'nothing';
        break;
}



// // 关系运算符
// // == === < > <= >= != !===
// // ==只判断值 ===需要值和类型都相等
// // 逻辑运算符
// // AND &&
// // OR ||
// // XOR 
// $num = 3;
// if ($num > 4 xor $num < 10) echo "异或不同时满足两个条件才执行";
