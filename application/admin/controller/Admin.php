<?php 
namespace app\admin\controller;

use think\Controller;
use think\Config;
use think\Db;

class Admin extends Controller{
	
	public function login(){
//		echo session('?uname');exit;
		
		if(request()->isAjax()){
//			echo md5(crypt(input('1'),config('pwordstring')));die;
//			$str = config('pwordstring');
			$info = ['error'=>false,'msg'=>''];
			//先判断验证码
			if(!captcha_check(input('post.code'))){
//				die('验证码错误');
				trace('验证码错误','info');//调试
				$info['msg'] = '验证码错误';
				return $info;
			}
			$uname = input('post.uname');
			$one = Db::name('manager')->where("uname='$uname'")->find();
			if(!$one){
				trace('用户名不存在','info');
				$info['msg'] = '用户名不存在';
				return $info;
			}
			if($one['pword'] != md5(crypt(input('post.pword'),config('pwordstring')))){
				trace('账号或密码有误','info');	
				$info['msg'] = '账号或密码有误';
				return $info;
			}
			session('uname',$uname);
			session('uId',$one['Id']);
			
			$info = ['error'=>true,'msg'=>'登录成功'];
				return $info;
		}
			return $this->fetch();
	}

	function logout(){
		session(null);
		$this->success('退出成功','login','',2);
//		$this->redirect('login');//不进入跳转页面
	}
}	
	
	
	
?>