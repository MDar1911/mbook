<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
		$Model=M('Book');
		$data= $Model->field('book_id, book_name, book_newPrice ,book_img')->where('book_isSepprice=1')->find();
		$this->assign('book',$data);	
		//dump($data);	
		$this->display();
    }
	
	public function type(){
		$Model=M('Bigtype');
		$bdata= $Model->field('b_id, b_name')->select();
		$this->assign('b',$bdata );
		$data = $Model->join('tb_smalltype on tb_smalltype.b_id = tb_bigtype.b_id')->select();
		$this->assign('s',$data );
        $this->display();
	}
	public function lianxi(){
		
        $this->display();
	}
	public function gonggao(){
		
        $this->display();
	}
	public function bangzhu(){
		
        $this->display();
	}
	public function tuichu(){
		$Model=M('Book');
		$data= $Model->field('book_id, book_name, book_newPrice ,book_img')->where('book_isSepprice=1')->find();
		$this->assign('book',$data);
        $this->display();
	}
		public function search(){
		$Model=M('book');
		$name=$_POST['search'];
		$where['book_name']=array("like","%$name%");
		$bdata=$Model->where($where)->select();
		//dump($bdata);
		$this->assign("b",$bdata);
		$this->display();
	}

	public function logindo(){
		session_start();
		$Model=M('user');
		$name=$_POST['user_name'];
		$pwd=$_POST['user_pwd'];
		
		$where=array('user_name'=>$name,'user_pwd'=>md5($pwd));
		$bdata=$Model->where($where)->find();
		//dump($bdata);
		
		if($bdata){
			$_SESSION['name']=$name;
			$_SESSION['pwd']=$pwd;
			$this->assign("name",$_SESSION['name']);
			$this->display();
		}
		if(isset($_SESSION['name'])){
			$this->assign("name",$_SESSION['name']);
			$this->display();
		}else{
			$this->error("µÇÂ¼Ê§°Ü");
		}
				
	}
}