<?php
	
namespace app\admin\controller;

use think\Loader;
use think\Db;

class Product extends Commond{
	
	public function productList(){
		$list = Db::name('product')->paginate(8);
		$this->assign('list',$list);
		$this->assign('title','商品列表');
		return $this->fetch();
	}
	
	public function productAdd(){
		if(request()->isPost()){
			$data = input('post.');
			$validate = Loader::validate('Product');
				if(!$validate->check($data)){
					$this->error($validate->getError());die;
				}
				
				$result = Db::name('product')->insert($data);
				if($result){
					$this->success('添加成功','Product/productList');die;	
				}else{
					$this->error('添加失败');die;
				}
		}
		
		//分类
		$cateList = $this->cate();
		
		//品牌
		$brandList = db('brand')->select();
		$this->assign('cateList',$cateList);
		$this->assign('brandList',$brandList);		
		
		
		$this->assign('title','商品添加');
		return $this->fetch();
	}
	
	public function productUpdate(){
		$id = input('id');
		if(request()->isPost()){
			$data = input('post.');
			$validate = Loader::validate('Product');
				if(!$validate->check($data)){
					$this->error($validate->getError());die;
				}
				$result = Db::name('product')->where("id=$id")->update($data);
				if($result>0){
					$this->success('更新成功','Product/productList');die;
				}elseif($result===0){
					$this->success('未更新数据');die;
				}else{
					$this->error('更新失败');die;
				}
			}
		$one = Db::name('product')->where('id='.$id)->find();
		$this->assign('one',$one);
		
		$this->assign('title','商品编辑');
		return $this->fetch();
	}
	
	public function productDelete(){
		$id = input('id');
		$result = Db::name('brand')->where("id=$id")->delete();
				if($result>0){
					$this->success('删除成功','Product/productList');die;
				}elseif($result===0){
					$this->success('未删除数据');die;
				}else{
					$this->error('删除失败');die;
				}
	}
}





?>