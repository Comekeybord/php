<?php
// 通过get获取表单上传的数据
// 判断是否有这个参数
// isset 判断一个变量是否已设置, 即变量已被声明，且其值不为 null
if (isset($_GET["usr"])) {
    // echo $_GET["usr"];
    // print_r($_GET);
    $usr = $_GET["usr"];
}

// 通过post方法获取传递的信息
// if (isset($_POST['usr'])) {
//     print_r($_POST);
// }

// 通过request方式获取穿的参数 可以接收所有方式发送的参数
// if (isset($_REQUEST['usr'])) {
//     print_r($_REQUEST);
// }

// $_SERVER["QUERY_STRING"]可以拿到?后面的参数(未经过url解码)
// echo urldecode($_SERVER["QUERY_STRING"]);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>get&post</title>
</head>

<body>
    <form action="11get&post.php" method="get">
        <div>
            <label for="usr">姓名</label>
            <input type="text" name="usr" id="usr">
        </div>
        <div>
            <label for="pwd">密码</label>
            <input type="text" name="pwd" id="pwd">
        </div>
        <input type="submit" value="确认">
    </form>

    <ul>
        <!-- 点击向后台传递usr内容 -->
        <li>
            <a href="11get&post.php?usr=Henry">Henry</a>
            <a href="11get&post.php?usr=Jack">Jack</a>
        </li>
    </ul>

    <h1>
        <!-- 打印后台获取的usr值 -->
        <?php echo $usr; ?>
    </h1>
</body>

</html>