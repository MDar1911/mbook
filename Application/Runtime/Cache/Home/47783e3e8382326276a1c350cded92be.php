<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>个人页面</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" >
<link rel="stylesheet" href="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.css" >
<script src="/mbook1/Public/JQM/jquery-1.11.1.min.js"></script>
<script src="/mbook1/Public/JQM/jquery.mobile-1.4.5.min.js"></script>


</head>

<body>

<div data-role="page">
  <div data-role="header" data-theme="f">
    <h1>欢迎回来,<?php echo ($name); ?></h1>
    <a href="index" data-role="button" data-icon="home">首页</a>

  </div>
  <div data-role="content" data-theme="f">
 <img  src="/mbook1/Public/images/logo.png" alt="lxwm" />
      <div class="ui-grid-a">

        <div class="ui-block-a"> <a href="#" data-rel="dialog"> <img  src="/mbook1/Public/images/neTool02.jpg" alt="lxwm" /><br/>
          <span>购物车</span><br/>
          <br/>
          </a> </div>


        <div class="ui-block-b"> <a href="dingdan.html"> <img  src="/mbook1/Public/images/neTool02.jpg" alt="lxwm" /><br/>
          <span>我的订单</span><br/>
          <br/>
          </a> </div>


          <div class="ui-block-a"> <a href="#"> <img  src="/mbook1/Public/images/neTool06.jpg" alt="lxwm" /><br/>
          <span>评论管理</span><br/>
          <br/>
          </a> </div>


        <div class="ui-block-b"> <a href="#"> <img  src="/mbook1/Public/images/neTool01.jpg" alt="spfl" /><br/>
          <span>我的信息</span><br/>
          <br/>
          </a> </div>
        
      </div>
    </div>

  <div data-role="footer" data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>

</body>
</html>