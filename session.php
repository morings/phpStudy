<?php
session_start();
$_SESSION['time'] = time();
//显示当前的session_id
echo "session_id:".session_id();
echo '<br/>'
?>
<html>
<head>
<meta charset="utf-8">
<title>php-session</title>
</head>
<body>

</body>
</html>
<?php?>