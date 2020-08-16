<?php
try {
    throw new Exception('wrong');
} catch(Exception $ex) {
    echo 'Error:'.$ex->getMessage()."<br/>";
    echo '异常行号：'.$ex->getLine()."<br/>";
    echo '所在文件：'.$ex->getFile()."<br/>";
    echo '错误code：'.$ex->getCode()."<br/>";
    //将异常信息记录到日志中

}
?>