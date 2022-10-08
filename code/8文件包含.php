
<?php
// include 如果引入文件名错误不会影响下面代码的执行
// require 如果引入文件名错误那么所有代码都无法执行
// require "./inc/inc1.php";
// include_once 不管引入多少次都只执行一次
// require_one 同理
include_once "./inc/inc.php";
include_once "./inc/inc.php";
include_once "./inc/inc.php";

echo "主页";
?>