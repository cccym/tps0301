<?php
namespace app\index\controller;

use think\Controller;

class Index extends Controller{

	 public function index(){
		$clist = db('category')->where("fid=23")->select();
//		print_r($clist);die;
		$this->assign([
			'clist'=>$clist,
			'title'=>'首页'
		
		]);
		
	return $this->fetch();	
	}
}	
	
	
	
?>
