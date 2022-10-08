<?php
if (isset($_POST["submit"])) {
    $username = $_POST["name"];
    //time() 精确到秒的时间戳
    echo time();
    //创建cookie 存储在客户端 第三个参数为过期时间
    setcookie("usr", $username, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coockies</title>
</head>

<body>
    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        <input type="text" name="name">
        <input type="submit" name="submit">
    </form>

    <a href="page2.php">page2.php</a>
</body>

</html>