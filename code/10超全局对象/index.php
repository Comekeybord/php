<!-- 引入serverinfo文件 -->
<?php include "serverInfo.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>服务器与客户端信息</title>
    <!-- 引入bootstrap网页版css样式 -->
    <link rel="stylesheet" href="https://bootswatch.com/5/cosmo/bootstrap.min.css">
    <style>
        .server {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="server">
            <h1>服务端配置信息</h1>
            <?php if ($server) : ?>
                <!-- 如果有配置就输出 -->
                <ul class="list-group">
                    <!-- 遍历服务器数组所有内容 -->
                    <?php foreach ($server as $key => $value) : ?>
                        <li class="list-group-item">
                            <strong><?php echo $key ?>:</strong>
                            <?php echo $value ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
        <div class="client">
            <h1>客户端配置信息</h1>
            <?php if ($client) : ?>
                <!-- 如果有配置就输出 -->
                <ul class="list-group">
                    <!-- 遍历客户端数组所有内容 -->
                    <?php foreach ($client as $key => $value) : ?>
                        <li class="list-group-item">
                            <strong><?php echo $key ?>:</strong>
                            <?php echo $value ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>