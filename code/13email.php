<?php
// 判断是否有submit变量 是否点击了submit 传递的值为空
if (filter_has_var(INPUT_POST, 'submit')) {
    // echo 'submit success';
    $usr = $_POST['usr'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    // 如果三个都不为空 那么进入发送环节
    if (!empty($usr) && !empty($email) && !empty($msg)) {
        // echo "邮件发送成功!";
        // 判断email是否合法
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // echo "ok";
            // 目标邮箱地址
            $toEmail = $email;
            // 电子邮件的主题
            $subject = "Contact Request From" . $usr;
            // 要发送的消息
            $message = "<h2>Contact Request</h2>
                        <h4>姓名:</h4>
                        <p>$usr</p>
                        <h4>邮箱:</h4>
                        <p>$email</p>
                        <h4>消息:</h4>
                        <p>$msg</p>";
            // email请求头信息
            $headers = "MIME-Version:1.0" . "\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8" . "\r\n";
            $headers .= "From:" . $usr . "<$email>";
            // 如果发送成功
            if (mail($toEmail, $subject, $message, $headers)) {
                $res = "邮件发送成功";
                $msgClass = "alert-success";
            } else {
                $res = "邮件发送失败";
                $msgClass = "alert-warning";
            }
        } else {
            $res = "email不合法!";
            $msgClass = "alert-danger";
        }
    } else {
        $res = "内容不能为空!";
        $msgClass = "alert-danger";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>邮件发送</title>
    <!-- 引入bootstrap文件css -->
    <link rel="stylesheet" href="https://bootswatch.com/5/cerulean/bootstrap.min.css">

</head>

<body>

    <div class="container">
        <!-- res不为空说明有信息没填 -->
        <?php if (!empty($res)) : ?>
            <div class="alert <?php echo $msgClass ?>" role="alert">
                <strong>
                    <?php echo $res ?>
                </strong>
            </div>
        <?php endif; ?>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="form-group">
                <label for="usr">User Name</label>
                <input type="text" class="form-control" id="usr" aria-describedby="emailHelp" name="usr" value="<?php echo !empty($usr) ? $usr : ''; ?>">
                <small id="emailHelp" class="form-text text-muted">姓名</small>
            </div>
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email" value="<?php echo !empty($email) ? $email : ''; ?>">
                <small id="emailHelp" class="form-text text-muted">邮箱</small>
            </div>
            <div class="form-group">
                <label for="msg">Message</label>
                <textarea class="form-control" id="msg" rows="3" name="msg"><?php echo !empty($msg) ? $msg : ''; ?></textarea>
                <small id="emailHelp" class="form-text text-muted">消息</small>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>



</body>

</html>