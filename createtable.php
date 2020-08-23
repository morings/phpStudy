<?php 
 $servername = "localhost";
 $username = "root";
 $password = "123456";
 $dbname = "my_db";
// 创建连接
$conn = mysqli_connect($servername, $username, $password, $dbname);
// 检测连接
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
 
// 使用 sql 创建数据表
$sql = "CREATE TABLE User (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
username VARCHAR(30) NOT NULL,
userage INT(6)
)";
 
if (mysqli_query($conn, $sql)) {
    echo "数据表 User 创建成功";
} else {
    echo "创建数据表错误: " . mysqli_error($conn);
}
 
mysqli_close($conn);

?>