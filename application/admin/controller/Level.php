<?php
	
namespace app\admin\controller;

use think\Loader;
use think\Db;

class Level extends Commond{
	
	public function levelList(){
		$list = $this->level();
		$this->assign('list',$list);
		$this->assign('title','权限列表');
		return $this->fetch();
	}
	
	public function levelAdd(){
		if(request()->isPost()){
			$data = input('post.');
			
				$result = Db::name('level')->insert($data);
				if($result){
					$this->success('添加成功','Level/levelList');die;	
				}else{
					$this->error('添加失败');die;
				}
		}
		
		$list = $this->level();
		$this->assign('list',$list);
		$this->assign('title','权限添加');
		return $this->fetch();
	}
	
	public function levelUpdate(){
		$id = input('id');
		if(request()->isPost()){
			$data = input('post.');
			
				$result = Db::name('category')->where("id=$id")->update($data);
				if($result>0){
					$this->success('更新成功','Level/levelList');die;
				}elseif($result===0){
					$this->success('未更新数据');die;
				}else{
					$this->error('更新失败');die;
				}
			}
		$one = Db::name('level')->where('id='.$id)->find();
		$this->assign('one',$one);
		
		$this->assign('title','权限编辑');
		return $this->fetch();
	}
	
	public function levelDelete(){
		$id = input('id');
		$result = Db::name('level')->where("id=$id")->delete();
				if($result>0){
					$this->success('删除成功','Level/levelList');die;
				}elseif($result===0){
					$this->success('未删除数据');die;
				}else{
					$this->error('删除失败');die;
				}
	}
}





?>