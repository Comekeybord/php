<?php
//查询数据
function selectData($sql)
{
    //连接数据库
    $mysqli = new mysqli(
        //数据库地址
        "localhost",
        //用户名
        "root",
        //密码
        "admin666",
        //要操作的数据库
        "my_db_1"
    );

    //判断数据库是否连接成功
    if ($mysqli->connect_errno) {
        //连接失败返回true
        //打印错误
        die($mysqli->connect_error);
    }

    //设置编码格式
    $mysqli->query("set names utf8");
    //通过sql语句查询
    $res = $mysqli->query($sql);

    var_dump($res);
    echo "<hr>";

    //判断插入是否成功
    if ($res->num_rows) {
        //打印查询结果

        //1.获取结果数组$res->fetch_row()只打印一条
        //打印每一条
        // while ($row = $res->fetch_row()) {
        //     print_r($row);
        // }

        //2.第二种方法$res->fetch_array(MYSQLI_ASSOC)
        // MYSQLI_ASSOC表示以关联数组查询 可以查询到键值
        // while ($row = $res->fetch_array(MYSQLI_ASSOC)) {
        //     print_r($row);
        // }

        //3、$res->fetch_all(MYSQLI_ASSOC)一次得到所有数据
        // 但是需要转换成json数据
        $row = $res->fetch_all(MYSQLI_ASSOC);
        // 以键值对的形式返回
        echo json_encode($row);
        echo "查询成功";
    } else {
        echo "删除失败";
    }

    //关闭数据库
    $mysqli->close();
}

$sql = "select * from users";
selectData($sql);
