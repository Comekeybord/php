<?php

//session存储在服务器中

// 判断是否提交
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    // 把name和email存储到session中
    //1、使用方法
    session_start(); //必须先执行这个start方法
    // 把变量值存储到session中
    $_SESSION["name"] = $name;
    $_SESSION["email"] = $email;
    // 跳转验证界面 header 发送原生 HTTP 头
    header("Location:page2.php");
}
// (1) Header常见属性 —— Location属性

// 当浏览器响应的状态码为3**时，我们就需要用到这个属性，这个属性会告诉浏览器接下来要访问哪条资源路径。

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <input type="text" name="name">
        <input type="text" name="email">
        <input type="submit" name="submit">
    </form>
</body>

</html>