<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook1/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
</head>

<body>
<div data-role="page" id="page1">
  <div data-role="header"> 
    <a href="index.html" data-ajax="false" data-role="button" data-icon="home">首页</a>
    <a href="denglu.html" data-role="button" data-icon="info">登陆</a>
    <h3 id="reg"> 意见 </h3>
  </div>
  <div data-role="content">
    <form name="RegForm" method="post" action="/mbook1/index.php/Home/Index/insert" data-ajax="false">
      <div data-role="fieldcontain">
      
      </div>
    </form>
  </div>
</div>
</body>
</html>