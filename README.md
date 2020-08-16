# Exception
<div class="code-desc co">
                <p>PHP具有很多异常处理类，其中Exception是所有异常处理的基类。</p>

<p>Exception具有几个基本属性与方法，其中包括了：</p>

<p>message 异常消息内容<br>
code 异常代码<br>
file 抛出异常的文件名<br>
line 抛出异常在该文件的行数</p>

<p>其中常用的方法有：</p>

<p>getTrace 获取异常追踪信息<br>
getTraceAsString 获取异常追踪信息的字符串<br>
getMessage 获取出错信息<br>
getCode 获取异常代码<br>
getFile 获取异常的文件<br>
getLine 获取异常的行数</p>

<p>如果必要的话，可以通过继承Exception类来建立自定义的异常处理类。</p>

<pre class="code">//自定义的异常类，继承了PHP的异常基类Exception
class MyException extends Exception {
    function getInfo() {
        return '自定义错误信息';
    }
}

try {
    //使用异常的函数应该位于 "try"  代码块内。如果没有触发异常，则代码将照常继续执行。但是如果异常被触发，会抛出一个异常。
    throw new MyException('error');//这里规定如何触发异常。注意：每一个 "throw" 必须对应至少一个 "catch"，当然可以对应多个"catch"
} catch(Exception $e) {//"catch" 代码块会捕获异常，并创建一个包含异常信息的对象
    echo $e-&gt;getInfo();//获取自定义的异常信息
&nbsp;   echo $e-&gt;getMessage();//获取继承自基类的getMessage信息
}</pre>

              </div>