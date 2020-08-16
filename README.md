# file操作
## 文件的读取
<p>file_get_contents也可以通过参数控制读取内容的开始点以及长度。</p>
<p>PHP也提供类似于C语言操作文件的方法，使用fopen，fgets，fread等方法，fgets可以从文件指针中读取一行，freads可以读取指定长度的字符串。</p>

## 写入文件
<p><span style="color: #ff0000">file_put_contents()写文件。</span>默认的是重新写文件，也就是会 替换原先的内容。追加的话使用参数FILE_APPEND.</p>
<p>以追加形式写入内容 当设置 flags 参数值为 FILE_APPEND 时，表示在已有文件内容后面追加内容的方式写入新数据：</p>
<p>同样的，PHP也支持类似C语言风格的操作方式，采用fwrite进行文件写入。</p>
<p>通过PHP_EOL来换行写入

## 删除文件
<p>跟Unix系统命令类似，PHP使用unlink函数进行文件删除</p>
<p>删除文件夹使用rmdir函数，文件夹必须为空，如果不为空或者没有权限则会提示失败。</p>
<p>如果文件夹中存在文件，可以先循环删除目录中的所有文件，然后再删除该目录，循环删除可以使用glob函数遍历所有文件。</p>

```
foreach (glob("*") as $filename) {
   unlink($filename);
}
```

# php比较大小
<div id="cnblogs_post_body" class="blogpost-body">
    <p>PHP中的比较运算符有点诡异，很容易出错，现列出比较规则：</p>
<p>1、当两个字符进行大小比较时，是比较着这两个字符的ASCII码大小——这条很容易理解。</p>
<p>2、当两个字符串进行大小比较时，是从第一个字符开始，分别比教对应的ASCII大小，只要从从某个对应位置开始，其中一个字符串的当前位置字符大于另一个字符串对应位置字符，即直接判别出这两个字符串大小，如'ba'&gt;'az'——这条其实大家也都知道的。</p>
<p>那么'10'与'a'比较呢，当然还是一样的啦，首先将'1'和'a'ASCII码进行比较，'a'大。</p>
<p>3、<span style="color: #ff0000;">当一个数字与一个字符串/字符进行大小比较时，首先系统尝试将此字符串/字符转换为整型/浮点型</span>，然后进行比较，如'12bsd'转型为12，<span style="color: #ff0000;">'a'转型为0</span>，千万需要注意的是此时不是将其对应的ASCII码值与数字进行大小比较了。</p>
<p><span style="color: #ff0000;">所谓$str="*"</span></p>
<p><span style="color: #ff0000;">$str&gt;=0 &amp;&amp; $str&lt;=7永远为真</span>。</p>
<p>&nbsp;</p>
<p>其实同样的道理，'a'+10结果也是10。</p>
<p>并且容易忽略的：0 与任意不可转化为数字的字符串比较(操作符为==), 均返回 true。</p>
<p>最后就会出现如下结果：</p>
<div class="cnblogs_code">
<pre>1 var_dump('1000000'&lt;'a');    //result: boolean true
2 var_dump('a'&lt;1);            //result: boolean true
3 var_dump(1&lt;'1000000');      //result: boolean true</pre>
</div>
</div>

