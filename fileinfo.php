<?php
$file = './text.txt';
echo '所有者'.fileowner($file).'<br/>';
echo '创建时间'.date('Y-m-d H:i:s',filectime($file)).'<br/>';
echo '修改时间'.date('Y-m-d H:i:s',filemtime($file)).'<br/>';
echo '访问时间'.date('Y-m-d H:i:s',fileatime($file)).'<br/>';
?>