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
<div data-role="page" data-theme="f">
  <div data-role="header" data-theme="f">
    <a data-ajax="false" href="../index/index" data-role="button" data-icon="home" data-theme="a">首页</a>
    <a data-ajax="false" href="../index/type.html" data-role="button" data-icon="back" data-theme="a">返回</a>
    <h1>图书列表</h1>
  </div>
  <div data-role="content" data-theme="f">
     <ul data-role="listview"  data-inset="true"  data-theme="f">
        <?php if(is_array($blist)): $i = 0; $__LIST__ = $blist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bdata): $mod = ($i % 2 );++$i;?><li>
                <a data-ajax="false" href="book?book_id=<?php echo ($bdata["book_id"]); ?>" data-theme="f">
                    <img class="ui-li-thumb" src="/mbook1/Public/images/<?php echo ($bdata["book_img"]); ?>"   alt="" />
                    <span><?php echo ($bdata["book_name"]); ?></span><br/>
                    <span>原价：￥<?php echo ($bdata["book_oldprice"]); ?></span><br/>
                    <span  style="color:#F09">折后价：￥<?php echo ($bdata["book_newprice"]); ?></span>
                </a>
             </li><?php endforeach; endif; else: echo "" ;endif; ?>
     </ul>
  </div>
  <div data-role="footer" data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>