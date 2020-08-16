<?php
setcookie('user', 'qcx');
setcookie('time', time());
?>
<html>
<head>
<meta charset="utf-8">
<title>php-cookie的赋值与取值</title>
</head>
<body>

<?php
if (isset($_COOKIE["user"]))
    echo "欢迎 " . $_COOKIE["user"] . "!<br>";
else
    echo "普通访客!<br>";
?>

</body>
</html>