<?php
//连接数据库
$db = mysqli_connect('127.0.0.1', 'root', '123456','my_db');
mysqli_query($db,"set user 'utf8'");
//数据预处理 防止查询不到数据
if(!mysqli_query($db,"insert into user(username, userage) values('王二', 19)")){
  echo '插入失败'.mysqli_error($db);
}
mysqli_query($db,"insert into user(username, userage) values('王三', 19)");
//进行数据查询
$sql = "select * from user";
$result = mysqli_query($db,$sql);
echo '<pre>';
while ($row = mysqli_fetch_array($result)) {
  echo $row['username'].'<br/>';
};
echo '</pre>';
mysqli_close($db);