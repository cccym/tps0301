<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:79:"F:\phpstudy\PHPTutorial\WWW\0301\tp0301/application/index\view\member\user.html";i:1532679167;}*/ ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>用户</title>

	<link rel="stylesheet" href="__PUBLIC__css/common.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__css/user.css">
	<script type="text/javascript" src="__PUBLIC__js/jquery-1.11.0.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/city.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/citySelect.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/common.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/user.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/timeSelect.js" ></script>
	

</head>
<body>
	<div id="header">
		<div class="header_top">
			<div class="container">
				<?php if(session('?uname')): ?>
				<div class="left">
					<span>你好，欢迎来翰娜</span>
					<span><a href="<?php echo url('Member/user'); ?>"><?php echo \think\Session::get('uname'); ?></a></span>
					<span><a href="<?php echo url('Member/logout'); ?>">退出</a></span>
					
				</div>
				<div class="right">
					<ul >
						<li>
							<a href="user.html"><img src="__PUBLIC__images/header01.png"/>我的商城</a>
						</li>
						<li><a href="#"><img src="__PUBLIC__images/header02.png"/>我的关注</a></li>
						<li><a href="#"><img src="__PUBLIC__images/header03.png"/>收藏夹</a></li>
						<li class="dropdown">
							<a href="#"><img src="__PUBLIC__images/header04.png"/>网站导航<img src="__PUBLIC__images/show_list04.png" alt="show_list04" /></a>
							
							<ul class="dropdown-menu" role="menu">
								<li><a href="shop_list.html">商品列表</a></li>
								<li><a href="user.html">用户主页</a></li>
								<li><a href="comments.html">用户评论</a></li>
								<li><a href="address.html">地址详情</a></li>
							</ul>
						</li>
					</ul>
				</div>
				
				
			</div>
		</div>
				<?php else: ?>
				<div class="left">
					<span>你好，欢迎来翰娜</span>
					<span>请<a href="<?php echo url('Member/login'); ?>">登陆</a></span>
					<span><a href="<?php echo url('Member/register'); ?>">免费注册</a></span>
				</div>
				
				<?php endif; ?>
				
		<div class="header_middle clear">
			<div class="container">
				<div class="logo">
					<a href="<?php echo url('index/index'); ?>">
						<img src="__PUBLIC__images/index_logo.jpg" alt="index_logo" />
					</a>
				</div>
				<div class="search">
					<label for="">
						<input type="text"placeholder="请输入关键字" />
						<button type="button">搜索</button>
					</label>
					<ul>
						<li><a href="shop_list.html">男沐浴露</a><span></span></li>					
						<li><a href="shop_list.html">力士沐浴露 </a><span></span></li>			
						<li><a href="shop_list.html">沐浴露家庭装 </a><span></span></li>
						<li><a href="shop_list.html">多芬沐浴露  </a><span></span></li>
						<li><a href="shop_list.html">六神沐浴露</a><span></span></li>
						<li><a href="shop_list.html">阿迪达斯沐浴</a></li>
					</ul>
				</div>
				<div class="shop">
					<a href="shop_cart.html">
						<img src="__PUBLIC__images/index_header05.jpg" alt="/index_header05" />
						我的购物车<span class="badge">2</span>
					</a>
				</div>
			</div>	
		</div>
		<div class="header_bottom">
			<div class="container">
				
				<div class="all">
					<a href="javascript:;">全部商品</a>
					<ul >				
						<li><a href="shop_list.html">清洁</a></li>
						<li><a href="shop_list.html">保湿</a></li>
						<li><a href="shop_list.html">滋润</a></li>
						<li><a href="shop_list.html">清凉舒爽</a></li>
						<li><a href="shop_list.html">补水</a></li>
						<li><a href="shop_list.html">清爽</a></li>
						<li><a href="shop_list.html">深层清洁</a></li>
						<li><a href="shop_list.html">舒缓肌肤</a></li>
					</ul>
				</div>
				<div class="nav">
					<ul>
						<li>
							<a href="shop_list.html">去屑</a>
							
						</li>
						<li>
							<a href="shop_list.html">健身</a>
									
						</li>
						<li>
							<a href="shop_list.html">花味</a>
							
						</li>
						<li>
							<a href="shop_list.html">磨砂</a>
							
						</li>
						<li>
							<a href="shop_list.html">沐浴露</a>
							
						</li>
						<li>
							<a href="shop_list.html">牛奶味</a>
							
						</li>
						<li>
							<a href="shop_list.html">香皂</a>
							
						</li>
						<li>
							<a href="shop_list.html">驱蚊止痒</a>
						
						</li>
						<li>
							<a href="shop_list.html">泡澡</a>		
						</li>					
						<li>
							<a href="shop_list.html">沐浴套装</a>
						</li>
						<li>
							<a href="shop_list.html">果味</a>
						</li>
					</ul>
				</div>
			</div>
		</div>		
	</div>
	<div id="content">
		<div class="container">
			<div class="user">
				<h1>用户中心</h1>
				<div class="middle clear">
					<div class="left">
						<ul>
							<li>
								<h2>订单中心</h2>
								<ol>
									<li><a href="order.html">我的订单</a></li>
									<li><a href="order.html">团购订单</a></li>
									<li><a href="order.html">本地生活订单</a></li>
									<li><a href="order.html">取消订单记录</a></li>
								</ol>	
								
							</li>
							<li>
								<h2>关注中心</h2>
								<ol>
									<li><a href="shop_list.html">关注的商品</a></li>
									<li><a href="shop_list.html">关注的店铺</a></li>
									<li><a href="shop_list.html">关注的品牌</a></li>
									<li><a href="shop_list.html">关注的活动</a></li>
								</ol>	
								
							</li>
							<li>
								<h2>客服服务</h2>
								<ol>
									<li><a href="comments.html">退换货服务</a></li>
									<li><a href="comments.html">价格保护</a></li>
									<li><a href="comments.html">意见建议</a></li>
									<li><a href="comments.html">购买咨询</a></li>
									<li><a href="comments.html">售后服务</a></li>
								</ol>	
								
							</li>
							<li>
								<h2>个人设置</h2>
								<ol>
									<li><a href="address.html">个人资料</a></li>
									<li><a href="address.html">收获地址</a></li>
									<li><a href="address.html">修改密码</a></li>
								
								</ol>	
								
							</li>
						</ul>
					</div>
					<div class="right">
						<div class="top">
							<img src="__PUBLIC__images/user01.jpg" alt="user01" />
							<img src="__PUBLIC__images/user02.jpg" alt="user02" /><span>新人会员</span>
							<img src="__PUBLIC__images/user03.jpg" alt="user03" /><span>购物天数<small>1天</small></span>
						</div>
						<div class="message">
							<form action="" name="userForm" >
								<label for="user">
									<span>*</span>昵称：
									<input type="text" name="user" id="user" value="" placeholder="mingxin" onblur="userCheck(this.value)"/>
									<strong id="alertUser"></strong>
								</label>
								<label for="sex">
									<span>*</span>性别：
									<input type="radio" name="sex" id="boy" checked="checked"/><em>男</em>
									<input type="radio" name="sex" id="girl"/><em>女</em>
								</label>
								<label for="" >
									<span>*</span>生日：
									<!--<img src="__PUBLIC__images/user-se.jpg"/>-->
									<select name="year_" onchange="year_Month(this.value)" onblur="yearCheck(value)"class="year">
										
										<option value=""  >请选择</option>
									</select>年
									<!--<img src="__PUBLIC__images/user-se.jpg"/>-->
									<select  name="Month"onchange="MonthDay(this.value)"onblur="monthCheck(value)" class="month">
										
										<option value=""  >请选择</option>
									</select>月
									<!--<img src="__PUBLIC__images/user-se.jpg"/>-->
									<select name="Day" onblur="dayCheck(value)"class="day" >
										
										<option value="">请选择</option>
									</select>日
									<em>填写生日有惊喜哦</em>									
									<strong id="alertYear"></strong>
									<strong id="alertMonth"></strong>
									<strong id="alertDay"></strong>
								</label>
								<label for="" id="study">
									<span>*</span>兴趣：<span>请选择你感兴趣的分类，给你最新个人推荐</span>
									<em data-id="0">沐浴露</em>
									<em data-id="0">沐浴露</em>
									<em data-id="0">沐浴露</em>
								</label>
								<label for="email">
									<span>*</span>邮箱：
									<input type="text" name="email" id="email" placeholder="" value="" onblur="emailCheck(this.value)"/>
									<em>立即认证</em>
									<strong id="alertEmail"></strong>
								</label>
								<label for="name">
									<span>*</span>姓名：
									<input type="text" name="name" id="name" value="" onblur="nameCheck(this.value)"/>
									<strong id="alertName"></strong>
								</label>
								<label for="name">
									<span>*</span>住址：
									<!--<img src="__PUBLIC__images/user-se.jpg"/>-->
									<select name="province" class="province">
										<option value="">请选择</option>
									</select>
									<!--<img src="__PUBLIC__images/user-se.jpg"/>-->
									<select name="city" class="city" >
										
										<option value="">请选择</option>
									</select>
									<!--<img src="__PUBLIC__images/user-se.jpg"/>-->
									<select name="county" class="county">
										<option value="">请选择</option>
									</select>
									<input type="text" value="" />
									<strong id="alertAddress"></strong>
									<strong id="alertProvince"></strong>
									<strong id="alertCity"></strong>
									<strong id="alertCounty"></strong>
								</label>
								<button type="submit" id="sub">提交</button>
							</form>
						</div>
						<div class="bottom">
							<span>安全小提示：</span>
							<p>1、如果您的账号登录密码忘记，可以直接通过验证安保保问题和答案，从新设置密码。</p>
							<p>2、由于保安问题是由您选定的3个问题和答案按组成，为了防止遗忘，建议您一周验证记忆一次。</p>
							<p>3、安保问题答案不要设置太简单，容易被人猜到。</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="container">
			<div class="top clear">
				<ul>
					<li>
						<img src="__PUBLIC__images/index_footer01.jpg"/>			
						<h2><a href="#">保障</a></h2>
						<span>正品行货 放心选购</span>
				
					</li>
					<li>
						<img src="__PUBLIC__images/index_footer02.jpg"/>
						<h2><a href="#">7天</a></h2>
						<span>无理由退货</span>
			
					</li>
					<li>
						<img src="__PUBLIC__images/index_footer03.jpg"/>
						<h2><a href="#">准时送达</a></h2>
						<span>收货时间由你做主</span>

					</li>
					<li>
						<img src="__PUBLIC__images/index_footer04.jpg"/>
						<h2><a href="#">满</a></h2>
						<span>99包邮</span>
			
					</li>
					<li>
						<img src="__PUBLIC__images/index_footer04.jpg"/>
						<h2><a href="#">帮助中心</a></h2>
						<span>您的购物指南</span>
					
					</li>
				</ul>
			</div>
			<div class="middle clear">
				<div class="left">
					<ul>
						<li>
							<a href="#">购物指南</a>
							<ol>
								<li><a href="register.html">免费注册</a></li>
								<li><a href="#">开通支付宝</a></li>
								<li><a href="#">支付宝充值</a></li>
							</ol>
							
						</li>
						<li>
							<a href="#">天猫保障</a>
							<ol>
								<li><a href="#">发票保障</a></li>
								<li><a href="#">售后规则</a></li>
								<li><a href="#">缺货赔付</a></li>
							</ol>
							
						</li>
						<li>
							<a href="#">支付方式</a>
							<ol>
								<li><a href="#">快捷支付</a></li>
								<li><a href="#">信用卡</a></li>
								<li><a href="#">余额宝</a></li>
								<li><a href="#">蚂蚁花呗</a></li>
								<li><a href="#">货到付款</a></li>
							</ol>
						</li>
						<li>
							<a href="#">商家服务</a>
							<ol>
								<li><a href="#">商家入驻</a></li>
								<li><a href="#">商家中心</a></li>
								<li><a href="#">天猫智库</a></li>
								<li><a href="#">天猫规则</a></li>
								<li><a href="#">物流服务</a></li>
								<li><a href="#">喵言喵语</a></li>
								<li><a href="#">运营服务</a></li>
							</ol>
							
						</li>
					</ul>
				</div>
				<div class="right">
					<img src="__PUBLIC__images/index_footer05.jpg" alt="index_footer05" />
					<span>扫一扫</span>
				</div>
			</div>
		</div>	
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
