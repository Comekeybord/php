<?php
// 创建数组 获取服务器信息
$server = [
    // 获取服务器主机名
    "Host Server Name" => $_SERVER["SERVER_NAME"],
    // 获取服务器软件信息
    "Host Server Software" => $_SERVER["SERVER_SOFTWARE"],
    // 获取网站根路径
    "Document Root" => $_SERVER["DOCUMENT_ROOT"],
    // 获取http头的名字 跟主机名是一样的
    "Http Host" => $_SERVER["HTTP_HOST"],
    // 获取当前文件名
    "Script Name" => $_SERVER["SCRIPT_NAME"],
    // 获取当前文件绝对路径
    "Absolute Path" => $_SERVER["SCRIPT_FILENAME"],
    // 获取当前文件网页路径
    "Current Page" => $_SERVER["PHP_SELF"],
];

// echo $server["Current Page"];
// print_r($server);


// 创建客户端数组信息
$client = [
    // 获取客户端设备信息
    "Client System Info" => $_SERVER["HTTP_USER_AGENT"],
    // 获取客户端ip
    "Client Ip" => $_SERVER["REMOTE_ADDR"],
    // 获取客户端端口号
    "Client Port" => $_SERVER["REMOTE_PORT"],
];
// echo $client["Client Port"];
