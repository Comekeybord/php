<?php
//$_SESSION是一个全局数组
session_start();
print_r($_SESSION);
$_SESSION["name"] = "henry";
$name = $_SESSION["name"];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>hello <?php echo $name; ?></h1>
</body>

</html>