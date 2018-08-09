<?php
namespace app\index\controller;

use think\Controller;
use app\index\model\Member as User;

class Member extends controller
{	
	
    public function login(){
//  	print_r(config('pwd'));die;
		$info = ['info'=>false,'msg'=>''];
		
    	if(request()->isAjax()){
    		$data = input('post.');
			$uname = $data['uname'];
			$one = db('member')->where("uname=$uname")->find();
//			print_r($one);die;
			if(!$one){
				$infop0['msg'] = '账号或密码错误';				
				return $info;
			}
			
			$data['upwd'] = md_crypt($data['upwd']);
//			print_r($data['upwd']);die;
			if($data['upwd'] != $one['upwd']){
				$info['msg'] = '账号或密码错误';				
				return $info;
			}
		
			session('uname',$uname);
			session('uId',$one['Id']);
//			print_r($_SESSION);die;
			$info = ['info'=>true,'msg'=>'登入成功'];	
			return $info;
			
    	}
    	
		return $this->fetch();
       
    }
    
    //注册	
	 public function register(){
//	 	 	print_r(config('pwd'));die;
    		if(request()->isAjax()){
    			$data = input('post.');
//				print_r($data);die;
			$info = ['code'=>0,'info'=>false,'msg'=>''];
			$validate = $this->validate($data,[
				'uname' => 'require',
				'upwd' => 'require|confirm',
			],[
				'uname.require'=>'用户名不能为空',
				'upwd.require'=>'密码不能为空',
				'confirm.confirm'=>'两次密码不一致',
			]);
			if(true === $validate){
				$data['upwd'] = md_crypt($data['upwd']);
				
				unset($data['upwd_confirm']);
				$re = db('member')->insert($data);

				if($re){
					$info = ['code'=>1,'info'=>true,'msg'=>'注册成功'];
					return $info;
				}else{
					$info = ['code'=>0,'info'=>false,'msg'=>'注册失败'];
					return $info;
				}
			}else{
				$info['msg'] = $validate;
				return $info;
			}
    	}
		return $this->fetch();
       
    }
	 
	 //退出
	public function logout(){
		session(null);
		$this->error('退出成功','Index/index');
	}
    
	//用户中心
	public function user(){
		return $this->fetch();
	}
}
