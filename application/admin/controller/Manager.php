<?php
	namespace app/admin/controller;
	
	use think\Loader;
	use think\Db;
	use app\admin\model\User;
	
	class Manager extends Commond{
		
		public function managerList(){
			$list = Db::name('manager')->paginate(2);
			$this->assign('list',$list);
			$this->assign('title','品牌列表');
			return $this->fetch();
		}
		
		public function managerAdd(){
			if(request()->isPost(){
				$data = input('post.');
				$validate = $this->validate($data,[
					'rid' => 'gt:0',
					'uname' => 'require',
					'pwd' => 'require|confirm',
				],[
					'rid' => '请选择角色',
					'uname.require' => '账号不能为空',
					'pwd.require' => '密码不能为空',
					'pwd.confirm' => '两次输入密码不一致',
				
				]);
				
				$uname = $data['uname'];
				$hasName = db('manager')->where("uname='$uname'")->find();
				if($hasName) $this->error('用户名已存在');
				if(ture === $validate){
					$data['pwd'] = md5(crypt($data['pwd'],config('pwdstring')));
					$model = new User($data);
					$result = $model->allowField(true)->save();
					if($result){
						
					}
				}
			})
		}
	}



?>