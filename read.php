<?php
$fp = fopen("./text.txt",'r');
while(!feof($fp)){
  echo fgets($fp).'<br/>';//读取一行
}
fclose($fp);
?>