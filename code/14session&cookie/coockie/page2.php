<?php
# 改 
// cookie特性 更改不会立即拿到新的值 刷新一次才生效
setcookie("usr", "kkk", time() + 3600);
# 删除
setcookie("usr", "kkk", time() - 3600);
# 查 使用$_COOKIE

# 判断有几个cookie
if (count($_COOKIE) > 0) {
    echo "cookie个数是:" . count($_COOKIE) . '</br>';
} else {
    echo "cookie为空" . '</br>';
}

//这里的值是 我们设置到cookie中的键
if (isset($_COOKIE["usr"])) {
    echo "username is:" . $_COOKIE["usr"] . '</br>';
} else {
    echo "usr 不存在于 cookie中" . '</br>';
}
?>

<html>

</html>