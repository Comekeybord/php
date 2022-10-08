<?php
# 获取session
session_start();
$name = isset($_SESSION["name"]) ? $_SESSION["name"] : "";
$email = isset($_SESSION["email"]) ? $_SESSION["email"] : "";
?>

<script>
    console.log(location);
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page2</title>
</head>

<body>
    <h1>your name is :<?php echo $name; ?></h1>
    <h1>your email is :<?php echo $email; ?></h1>
    <a href="page3.php">page3.php</a>
</body>

</html>