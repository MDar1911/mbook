<?php if (!defined('THINK_PATH')) exit();?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>用户注</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header"> 
    <a href="index.html" data-ajax="false" data-role="button" data-icon="home">首页</a>
    <h3 id="reg"> 登录 </h3>
  </div>
  <div data-role="content">
    <form name="RegForm" method="post" action="book1.html" data-ajax="false">
      <div data-role="fieldcontain">
        <label for="username"> 用户名 </label>
        <input name="user" id="username"  value="" type="text" required>
      </div>
      <div data-role="fieldcontain">
        <label for="password"> 密码 </label>
        <input name="pwd" id="password" placeholder="" value="" type="password" required>
      </div>
      <input data-inline="true" type="submit" name="submit" value="提交"  />
    </form>
  </div>
</div>
 
</body>
</html>