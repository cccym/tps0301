<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"F:\phpstudy\PHPTutorial\WWW\0301\tp0301/application/index\view\member\login.html";i:1532436804;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>登录页</title>
		<link rel="stylesheet" href="__PUBLIC__css/common.css" />
		<link rel="stylesheet" href="__PUBLIC__css/login.css" />
		<script type="text/javascript" src="__PUBLIC__js/jquery-1.11.0.js" ></script>
		<script type="text/javascript" src="__PUBLIC__js/common.js" ></script>
		<!--<script type="text/javascript" src="__PUBLIC__js/login.js" ></script>-->
		
	</head>
	<body onload="return getStorage()">
		<div id="header">
			<div class="container clear">
				<div class="logo">
					<a href="index.html"><img src="__PUBLIC__images/register02.png" alt="register02" /></a>
				</div>
				<div class="left">
					<img src="__PUBLIC__images/register.png" alt="register" />
					<span>我想对“登录”提意见</span>
				</div>
			</div>
		</div>
		<div id="content">
			<div class="banner">
				<img src="__PUBLIC__images/login01.jpg"/>
				<div class="contanier">
					<div class="smal">
						<div class="small_top">
							<img src="__PUBLIC__images/login02.jpg"/>
							
							<span>扫码登录更安全</span>
							<img src="__PUBLIC__images/login04.jpg" alt="login04" />
							<h2>用户登录 <a href="register.html">免费注册</a></h2>
						</div>
						<form action="index.html" onsubmit="return submitInput()">
							<label for="user">
								<span><img src="__PUBLIC__images/login01.png"/></span>
								<input type="text" name="uname" id="tel" placeholder="会员名/邮箱/手机号" value=""/>
								<strong class="user"></strong>
							</label>
							<label for="password">
								<span><img src="__PUBLIC__images/login02.png"/></span>
								<input type="password" name="upwd" id="password" placeholder="密码" value=""/>
								<strong class="password"></strong>
							</label>
							<label for="">
								<a href="javascript:;"><img src="__PUBLIC__images/shop_car01.png" alt="0" id="check" onclick="isLoginImg(this)"/><span id="autoCheck">自动登录</span></a>
								<a href="#">忘记密码？</a>
							</label>
							<button type="submit" class="submit">登录</button>
							<p>更多合作网站账号登录</p>
							<a href="javascript:;"><img src="__PUBLIC__images/login07.jpg" alt="login07" /></a>
							<a href="javascript:;"><img src="__PUBLIC__images/login08.jpg" alt="login08" /></a>
							<a href="javascript:;"><img src="__PUBLIC__images/login09.jpg" alt="login09" /></a>
							<a href="javascript:void(0);" data-id="0" id="more">更多合作<span>&or;</span></a>
							<ul>
								<li><a href="javascript:;"><img src="__PUBLIC__images/login07.jpg" alt="login07" /></a></li>
								<li><a href="javascript:;"><img src="__PUBLIC__images/login08.jpg" alt="login08" /></a></li>
								<li><a href="javascript:;"><img src="__PUBLIC__images/login09.jpg" alt="login09" /></a></li>
							</ul>
						</form>
					</div>
				</div>
				
			</div>
		</div>
		
		<div id="footer">
			<div class="bottom">
				<div class="container">
					<p><a href="#">关于约翰娜</a>&nbsp;<a href="#">帮助中心</a>&nbsp;<a href="#">开放平台</a>&nbsp;<a href="#">诚聘英才</a>&nbsp;<a href="#">联系我们</a>
						&nbsp;<a href="#">网站合作</a>&nbsp;<a href="#">法律声明及&nbsp;隐私权政策</a>&nbsp;<a href="#">知识产权</a>&nbsp;<a href="#">廉正举报</a>
						<span>© 2006-2018yuehanna.COM 版权所有</span>
					</p>
					<p><span>营业执照注册号：33010600033688</span><small></small><span>网络文化经营许可证：浙网文（2016）0380-396号 </span><small></small><span>增值电信业务经营许可证：浙B6-30110350</span>
						<small></small><span>安全责任书  </span><small></small><span>浙公网安备 33010603302328号</span>
					</p>
				</div>	
			</div> 
		</div>
	</body>
</html>

<script>
	$(function(){
		$('.submit').click(function(){	
		var	uname = $("#tel").val()
		var	upwd = $("#password").val()
	
		if(uname == ''){
			alert('账号不能为空')
			return false;
		}
		if(upwd == ''){
			alert('密码不能为空')
			return false;
		}
	$.post("<?php echo url('login'); ?>",{uname:uname,upwd:upwd},function(data){
		
		 if(data.info){
		 	alert(data.msg)
		 	location="<?php echo url('user'); ?>"
		 }else{
		 	alert(data.msg)
		 }
	})	
			return false;
		})
		
	})
</script>
