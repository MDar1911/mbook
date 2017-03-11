<?php
namespace Home\Controller;
use Think\Controller;
class UserController extends Controller {
	//注册页面
	public function reg(){
		$this->display();
	}
	
    public function insert(){		
		$User = D("User"); // 实例化User对象
		if (!$User->create()){
			 // 如果创建失败 表示验证没有通过 输出错误提示信息
			 echo '<h1>'.$User->getError().' 点击此处 <a href="javascript:history.back(-1);">返回</a></h1>';
			 //exit($User->getError()); 		     
		}else{
			 // 验证通过 可以进行其他数据操作
			 $User->add();// 插入数据库
			 $this->success("<h1>注册成功</h1>","../Index/index.html");
		}				
    }

}