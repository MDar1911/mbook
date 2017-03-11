<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>图书分类</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook1/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.js"></script>
<style>
body {
  margin: 0 auto;
  text-align:center;
  padding:0;
}
div, ul, li, dl, dt, dd, h1, h2, h3, h4, p {
  margin:0;
  padding:0;
  list-style:none;
}
a {
  text-decoration:none;
}

.ui-bar-f
{
background-color:#F07;
border:#FF0 1px solid;
}
.ui-bar-f .ui-btn
{
background-color:gray;
}
.ui-bar-f .ui-btn:hover
{
background-color:green;
}
.ui-body-f
{
background-color:pink;
}
.ui-body-f .ui-btn
{
  background-color:pink;
}
.ui-body-f .ui-btn:hover
{
  background-color:pink;
}
</style> 
</head>

<body>
<div data-role="page" id="page1" data-theme="f">
  <div data-role="header"  data-theme="f">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home" data-theme="a">首页</a>
     <a data-ajax="false" href="../index/type.html" data-role="button" data-icon="back" data-theme="a">返回</a>
    <div data-role="navbar" data-theme="f">
      <ul>
        <li><a href="#page1" class="ui-state-persist ui-btn-active">概述</a></li>
        <li><a href="#page2">图片</a></li>
        <li><a href="#page3">简介</a></li>
        <li><a href="#page4">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content" data-theme="f">
    <div id="gaishu">
      <?php echo ($book['book_name']); ?><br/>
      <?php echo ($book['book_author']); ?><br/>
      ISBN: <?php echo ($book['book_isbn']); ?><br/>
      原价：<?php echo ($book['book_oldprice']); ?><br/>
      折后价：<?php echo ($book['book_newprice']); ?><br/>
    </div>
  </div>
  <div data-role="footer" data-id="nav_footer" data-theme="f"> </div>
</div>
<div data-role="page" id="page2" data-theme="f">
  <div data-role="header" data-theme="f">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home" data-theme="a">首页</a>
    <div data-role="navbar" data-theme="f">
      <ul>
        <li><a href="#page1">概述</a></li>
        <li><a href="#page2" class="ui-state-persist ui-btn-active">图片</a></li>
        <li><a href="#page3">简介</a></li>
        <li><a href="#page4">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content" data-theme="f">
    <div id="tupian"> <img src="/mbook1/Public/images/<?php echo ($book['book_img']); ?>" /> </div>
  </div>
  <div data-role="footer" data-id="nav_footer" data-theme="f"> </div>
</div>
<div data-role="page" id="page3" data-theme="f">
  <div data-role="header" data-theme="f">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home" data-theme="a">首页</a>
    <div data-role="navbar" data-theme="f">
      <ul>
        <li><a href="#page1">概述</a></li>
        <li><a href="#page2">图片</a></li>
        <li><a href="#page3" class="ui-state-persist ui-btn-active">简介</a></li>
        <li><a href="#page4">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content" data-theme="f">
    <div id="jianjie"> <?php echo ($book['book_about']); ?><br/></div>
  </div>
  <div data-role="footer" data-id="nav_footer" data-theme="f"> </div>
</div>
<div data-role="page" id="page4" data-theme="f">
  <div data-role="header" data-theme="f">
    <h1>图书展示</h1>
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home" data-theme="a">首页</a>
    <div data-role="navbar" data-theme="f">
      <ul>
        <li><a href="#page1">概述</a></li>
        <li><a href="#page2">图片</a></li>
        <li><a href="#page3">简介</a></li>
        <li><a href="#page4" class="ui-state-persist ui-btn-active">目录</a></li>
      </ul>
    </div>
  </div>
  <div data-role="content" data-theme="f">
    <div id="mulu">  <?php echo ($book['book_directory']); ?> <br/> </div>
  </div>
  <div data-role="footer" data-theme="f">
  </div>
</div>

</body>
</html>