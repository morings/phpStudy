<?php
$data='今天天气好好'.PHP_EOL;
$file = './text.txt';
file_put_contents($file,$data,FILE_APPEND);
$fp = fopen($file,'a');
fwrite($fp, '我们出去玩吧'.PHP_EOL);
fclose($fp);
$fp = fopen("./text.txt",'r');
while(!feof($fp)){
  echo fgets($fp).'<br>';//读取一行
}
fclose($fp);
?>