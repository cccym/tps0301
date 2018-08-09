<?php
	
namespace app\admin\controller;

use think\Loader;
use think\Db;

class Category extends Commond{
	
	public function categoryList(){
		$list = $this->cate();
		$this->assign('list',$list);
		$this->assign('title','分类列表');
		return $this->fetch();
	}
	
	public function categoryAdd(){
		if(request()->isPost()){
			$data = input('post.');
//		print_r($data);die;

				$result = Db::name('category')->insert($data);
				if($result){
					$this->success('添加成功','Category/categoryList');die;	
				}else{
					$this->error('添加失败');die;
				}
		}
		
		$list = $this->cate();
		$this->assign('list',$list);
		$this->assign('title','分类添加');
		return $this->fetch();
	}
	
	public function categoryUpdate(){
		$id = input('id');
		if(request()->isPost()){
			$data = input('post.');
			
				$result = Db::name('category')->where("id=$id")->update($data);
				if($result>0){
					$this->success('更新成功','Category/brandList');die;
				}elseif($result===0){
					$this->success('未更新数据');die;
				}else{
					$this->error('更新失败');die;
				}
			}
		$one = Db::name('category')->where('id='.$id)->find();
		$this->assign('one',$one);
		
		$this->assign('title','分类编辑');
		return $this->fetch();
	}
	
	public function categoryDelete(){
		$id = input('id');
		$result = Db::name('category')->where("id=$id")->delete();
				if($result>0){
					$this->success('删除成功','Category/categoryList');die;
				}elseif($result===0){
					$this->success('未删除数据');die;
				}else{
					$this->error('删除失败');die;
				}
	}
}





?>