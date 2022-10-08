<?php
// 过滤器函数
// 检查过滤器传递过来的数据
// filter_has_var — 检测是否存在指定类型的变量
// if (filter_has_var(INPUT_POST, 'usr')) {
//     // 如果通过post方法传递了usr参数就执行
//     echo 'usr found';
// } else {
//     echo 'usr notFound';
// }


// 验证内容是否是邮箱
// // 先判断是否有这个变量
// if (isset($_POST['usr'])) {
//     // 再判断是否是邮箱
//     //filter_input — 通过名称获取特定的外部变量，并且可以通过过滤器处理它
//     if (filter_input(INPUT_POST, 'usr', FILTER_VALIDATE_EMAIL)) {
//         echo "邮箱合法";
//     } else {
//         echo "邮箱不合法";
//     }
// }

// 先判断是否有这个变量
if (isset($_POST['usr'])) {
    // 去掉不合法字符
    $email = $_POST['usr'];
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email;
    // 再判断是否是邮箱
    // filter_var使用特定的过滤器过滤一个变量
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "邮箱合法";
    } else {
        echo "邮箱不合法";
    }
}

// VALIDATE表示验证的参数
// SANITIZE表示过滤特殊符号的参数
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>过滤器函数</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="usr" id="">
        <button type="submit">submit</button>
    </form>
</body>

</html>