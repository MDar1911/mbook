<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>书店首页</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
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
<div data-role="page">
  <div data-role="header" data-theme="f">
    <h1>欢迎访问我的书店</h1>
     <a href="login" data-role="button" data-icon="info">登陆</a>
    <a href="#search" data-role="button" data-icon="search">搜索</a>
  </div>
  <div data-role="content" data-theme="f">
    <div data-role="collapsible" data-collapsed="false">
      <h1 >今日特价</h1>
      <div>
         <a href='../book/book?book_id=<?php echo ($book["book_id"]); ?>' data-ajax="false"> <img src="/mbook1/Public/images/<?php echo ($book['book_img']); ?>" /> <br/>
        <?php echo ($book['book_name']); ?><br/>
        <span>￥<?php echo ($book['book_newprice']); ?></span> </a>
      </div>
    </div>
    <div data-role="collapsible" data-collapsed="false">
      <h1>快捷工具</h1>
      <div class="ui-grid-b">
        <div class="ui-block-a"> <a href="type.html"> <img  src="/mbook1/Public/images/neTool01.jpg" alt="spfl" /><br/>
          <span>商品分类</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-b"> <a href="lianxi.html"> <img  src="/mbook1/Public/images/neTool02.jpg" alt="lxwm" /><br/>
          <span>联系我们</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-c"> <a href="../user/reg"> <img  src="/mbook1/Public/images/neTool03.jpg" alt="lxwm" /><br/>
          <span>用户注册</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-a"> <a href="gonggao.html"> <img  src="/mbook1/Public/images/neTool04.jpg" alt="lxwm" /><br/>
          <span>书店公告</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-b"> <a href="bangzhu.html"> <img  src="/mbook1/Public/images/neTool05.jpg" alt="lxwm" /><br/>
          <span>帮助中心</span><br/>
          <br/>
          </a> </div>
        <div class="ui-block-c"> <a href="yijian.html"> <img  src="/mbook1/Public/images/neTool06.jpg" alt="lxwm" /><br/>
          <span>意见反馈</span><br/>
          <br/>
          </a> </div>
      </div>
    </div>
  </div>
  <div data-role="footer" data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>

<div data-role="page" id="search">
  <div data-role="header" data-theme="f">
    <h1>商品搜索</h1>
  </div>

  <div data-role="content" data-theme="f">
    <form method="post" action="search.html">
      <div data-role="fieldcontain">
        <label for="search">书名：</label>
        <input type="search" name="search" id="search" placeholder="搜索内容...">
      </div>
      <input type="submit" data-inline="true" value="提交">
      <a href="index.html" data-role="button" data-inline="true">取消</a>
    </form> 
  </div>

  <div data-role="footer" data-theme="f">
  </div>
</div> 
</body>
</html>