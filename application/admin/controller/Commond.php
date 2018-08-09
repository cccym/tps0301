<?php

namespace app\admin\controller;

use think\Controller;

class Commond extends Controller{
	public function __construct(){
		parent::__construct();
		$this->isLogin();
		$list = $this->cate();
//		print_r($list);die;
	}
	
	private function isLogin(){
		if(!session('?uname')){
			$this->error('请先登录','Admin/login');
		}
	}
	
	function cate($id=0,$list=[],$spac=0){
		if($id>0) $spac ++;
		$fid = $id;
		$parentlist = db('category')->where("fid=$fid")->select();
//		print_r($parentlist);
		foreach($parentlist as $k=>$v){
			$v['name'] = str_repeat('|--',$spac).$v['name'];
			$list[] = $v;
			$list = $this->cate($v['Id'],$list,$spac);
		}
		return $list;
	}
	
	
	function level($id=0,$list=[],$spac=0){
		if($id>0) $spac ++;
		$fid = $id;
		$parentlist = db('level')->where("fid=$fid")->select();
		foreach($parentlist as $k=>$v){
			$v['name'] = str_repeat('|--',$spac).$v['name'];
			$list[] = $v;
			$list = $this->level($v['Id'],$list,$spac);
		}
		return $list;
	}
	
	function upload($files){
		$filepath = './public/static/admin/upload/'.date('Y-m-d');
		if(!file_exists($filepath)){
			mkdir($filepath,0777,true);
		}
		//验证格式,并上传
		$info = $v->validate(['size'=>2*1024*1024,'ext'=>"jpg,png,gif,jpeg"])->rule('uniqid')->move($filepath);
		if($info){
			$dataImg[] = rtrim($filepath,'/').'/'.$info->getSaveName();
		}
	}
	
}


?>