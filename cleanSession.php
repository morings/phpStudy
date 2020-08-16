<?php
//第一步：开启Session并初始化
session_start();

//第二部：删除所有Session的变量，也可以用unset($_SESSION[XXX])逐个删除
$_SESSION = array();

//第三部：如果使用基于Cookie的session，使用setCookkie()删除包含Session ID的cookie
if(isset($_COOKIE[session_name()])) {
    setCookie(session_name(), "", time()-42000, "/");
}

//第四部：最后彻底销毁session
session_destroy();

?>