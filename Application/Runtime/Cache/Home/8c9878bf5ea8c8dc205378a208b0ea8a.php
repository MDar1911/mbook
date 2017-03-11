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
<div data-role="page"  data-theme="f">
  <div data-role="header"  data-theme="f"> <a  href="../index" data-role="button" data-icon="home"  data-theme="a">首页</a>
    <h1>图书分类</h1>
  </div>
  <div data-role="content"  data-theme="f">
    <div data-role="collapsible-set"  data-theme="f">
      <?php if(is_array($b)): $i = 0; $__LIST__ = $b;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bdata): $mod = ($i % 2 );++$i;?><!--读取大类-->
        <div data-role="collapsible" data-collapsed="true"  data-theme="f">
          <h1><?php echo ($bdata['b_name']); ?></h1>
          <ul data-role="listview"  data-inset="false"  data-theme="f">
            <?php if(is_array($s)): foreach($s as $key=>$sdata): ?><!--读取小类-->
              <?php if($bdata['b_id'] == $sdata['b_id']): ?><!--条件判断-->
               <li><a data-ajax="false" href="../book/booklist?sid=<?php echo ($sdata['s_id']); ?>"  data-theme="f"><span><?php echo ($sdata['s_name']); ?></span></a></li><?php endif; endforeach; endif; ?>
          </ul>
        </div><?php endforeach; endif; else: echo "" ;endif; ?>
    </div>
  </div>
  <div data-role="footer"  data-theme="f">
    <h1>机电书店</h1>
  </div>
</div>
</body>
</html>