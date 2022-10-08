<?php


//在这里面封装一下
function insertData($sql)
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

    //判断插入是否成功
    if ($res) {
        echo "插入成功";
    } else {
        echo "插入失败";
    }

    //关闭数据库
    $mysqli->close();
}

//更新数据
function updateData($sql)
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

    //判断插入是否成功
    if ($res) {
        echo "更新成功";
    } else {
        echo "更新失败";
    }

    //关闭数据库
    $mysqli->close();
}

//删除数据
function deleteData($sql)
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

    //判断插入是否成功
    if ($res) {
        echo "删除成功";
    } else {
        echo "删除失败";
    }

    //关闭数据库
    $mysqli->close();
}

// insertData('
//     insert into users (username,password) values ("kkkphpphp3","666");
// ');

// updateData("
//     update users set password='777' where id=10;
// ");


deleteData("delete from users where id=10");
