<?php
namespace Home\Controller;
use Think\Controller;
class BookController extends Controller {
	public function booklist(){
		$Model=M('Book');
		$data= $Model->where('s_id='.$_GET["sid"])->select();
		$this->assign('blist',$data);	
		//dump($data);	
		$this->display();
	}
   
	
	public function book(){
		$Model=M('Book');
		$data= $Model->where('book_id='.$_GET["book_id"])->find();
		$this->assign('book',$data);	
		//dump($data);	
		$this->display();
	}	

}