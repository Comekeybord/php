<?php
//设计数据库

//连接数据库


$conn = new mysqli("localhost", "root", "admin666", "phpcrud", 3306);
//判断是否连接成功
if ($conn->connect_error) {
    echo "Could not connect to mysqldb";
} else {
    echo "Connected success";
}


//构建接口
//定义返回的的数据对象
$res = array("error" => false);
//定义变量接收传过来的值
$action = "read";
if (isset($_GET['action'])) {
    $action = $_GET['action'];
}

//设置编码
$conn->query("set names utf8");


// 查询数据接口
if ($action == "read") {
    $result = $conn->query("select * from users");
    // var_dump($result);
    //遍历 一次只能拿一行
    $users = [];
    while ($row = $result->fetch_assoc()) {
        // var_dump($row);
        array_push($users, $row);
    }
    //将结果添加到res中
    $res['users'] = $users;
}

// 删除数据接口
if ($action == "delete") {
    //接收传递的参数
    $id = $_POST["id"];
    //删除参数
    $result = $conn->query("delete from users where id = $id");
    if ($result) {
        $res["message"] = "request OK";
    } else {
        $res["error"] = true;
        $res["message"] = "request Failed";
    }
}

// 修改数据接口
if ($action == "update") {
    //接收传递的参数
    $id = $_POST["id"];
    $username = $_POST["username"];
    $email = $_POST["email"];
    $wechat = $_POST["wechat"];
    //更新参数
    $result = $conn->query("update users set username='$username',email='$email',wechat='$wechat' where id=$id");
    if ($result) {
        $res["message"] = "request OK";
    } else {
        $res["error"] = true;
        $res["message"] = "request Failed";
    }
}

// 增加数据接口
if ($action == "insert") {
    //接收传递的参数
    $username = $_POST["username"];
    $email = $_POST["email"];
    $wechat = $_POST["wechat"];

    //插入参数
    $result = $conn->query("insert into users (username,email,wechat) value ('$username','$email','$wechat')");
    if ($result) {
        $res["message"] = "request OK";
    } else {
        $res["error"] = true;
        $res["message"] = "request Failed";
    }
}


//关闭数据库
$conn->close();

echo json_encode($res);

//发送数据头
header("Content-Type:application/json");
