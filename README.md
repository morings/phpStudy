# php学习笔记
# mysql数据库操作
## mysqli_connect
<p>mysqli_connect() 函数打开一个到 MySQL 服务器的新的连接。</p>
<h2>语法</h2>

```
mysqli_connect(host,username,password,dbname,port,socket);
```
## mysqli_query
<p>mysqli_query() 函数执行某个针对数据库的查询。</p>
<h2>语法</h2>

```
mysqli_query(connection,query,resultmode);
```
<table class="reference notranslate">
<tbody><tr>
<th width="20%">参数</th>
    <th width="80%">描述</th>
  </tr>
<tr>
<td><em>connection</em></td>
    <td>必需。规定要使用的 MySQL 连接。</td>
  </tr>
<tr>
<td><em>query</em></td>
    <td>必需，规定查询字符串。</td>
  </tr>
<tr>
<td><em>resultmode</em></td>
    <td>
	<p>可选。一个常量。可以是下列值中的任意一个：</p>
	<ul>
<li>MYSQLI_USE_RESULT（如果需要检索大量数据，请使用这个）</li>
		<li>MYSQLI_STORE_RESULT（默认）</li>
	</ul>
</td>
  </tr>
</tbody></table>

## mysqli_error
<p>mysqli_error() 函数返回最近调用函数的最后一个错误描述。</p>
<h2>语法</h2>

```
mysqli_error(connection);
```
<table class="reference notranslate">
<tbody><tr>
<th width="20%">参数</th>
    <th width="80%">描述</th>
  </tr>
<tr>
<td><em>connection</em></td>
    <td>必需。规定要使用的 MySQL 连接。</td>
  </tr>
</tbody></table>

## mysqli_close
<p>mysqli_close() 关闭mysql连接。</p>
<h2>语法</h2>

```
mysqli_close(connection);
```
<table class="reference notranslate">
<tbody><tr>
<th width="20%">参数</th>
    <th width="80%">描述</th>
  </tr>
<tr>
<td><em>connection</em></td>
    <td>必需。规定要使用的 MySQL 连接。</td>
  </tr>
</tbody></table>

## mysqli_fetch_array
<p>mysqli_fetch_array() 函数从结果集中取得一行作为关联数组，或数字数组，或二者兼有。</p>
<h2>语法</h2>

```
mysqli_fetch_array(result,resulttype);
```
<table class="reference notranslate">
<tbody><tr>
<th width="20%">参数</th>
    <th width="80%">描述</th>
  </tr>
<tr>
<td><em>result</em></td>
    <td>必需。规定由 mysqli_query()、mysqli_store_result() 或 mysqli_use_result() 返回的结果集标识符。</td>
  </tr>
<tr>
<td><em>resulttype</em></td>
    <td>可选。规定应该产生哪种类型的数组。可以是以下值中的一个：<ul>
<li>MYSQLI_ASSOC</li>
		<li>MYSQLI_NUM</li>
		<li>MYSQLI_BOTH</li>
	</ul>
</td>
  </tr>
</tbody></table>