<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:79:"F:\phpstudy\PHPTutorial\WWW\0301\tp0301/application/index\view\index\index.html";i:1532571081;s:81:"F:\phpstudy\PHPTutorial\WWW\0301\tp0301/application/index\view\public\header.html";i:1532683952;s:81:"F:\phpstudy\PHPTutorial\WWW\0301\tp0301/application/index\view\public\footer.html";i:1531377810;}*/ ?>
<!--header-->
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" href="__PUBLIC__css/common.css" />
	<link rel="stylesheet" type="text/css" href="__PUBLIC__css/index.css">
	<script type="text/javascript" src="__PUBLIC__js/jquery-1.11.0.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/common.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/index.js" ></script>
	<script type="text/javascript" src="__PUBLIC__js/banner.js" ></script>

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
				<?php else: ?>
				<div class="left">
					<span>你好，欢迎来翰娜</span>
					<span>请<a href="<?php echo url('Member/login'); ?>">登陆</a></span>
					<span><a href="<?php echo url('Member/register'); ?>">免费注册</a></span>
				</div>
				
				<?php endif; ?>
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
				
		<div class="header_middle clear">
			<div class="container">
				<div class="logo">
					<a href="<?php echo url('index/index'); ?>">
						<img src="__PUBLIC__images/index_logo.jpg" alt="index_logo" />
					</a>
				</div>
				<div class="search">
					<form for="">
						<input type="text"placeholder="请输入关键字" />
						<button type="button">搜索</button>
					</form>
					<ul>
						<li><a href="pro_details.html">男沐浴露</a><span></span></li>					
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
						<?php if(is_array($clist) || $clist instanceof \think\Collection || $clist instanceof \think\Paginator): $i = 0; $__LIST__ = $clist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cv): $mod = ($i % 2 );++$i;?>
						<li>
							
							<a href="shop_list.html"><?php echo $cv['name']; ?></a>
							
						</li>
						<?php endforeach; endif; else: echo "" ;endif; ?>
						<!--<li>
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
						</li>-->
					</ul>
				</div>
			</div>
		</div>				
	</div>
<!--/header-->
		
	<div id="article">
		<div class="index_banner">						
			  <div class="bd clear">
                <ul>
                    <li><a href="#"><img src="__PUBLIC__images/banner1.jpg"  alt="banner1" /></a></li>
                    <li><a href="#"><img src="__PUBLIC__images/banner2.jpg"  alt="banner2" /></a></li>
                    <li><a href="#"><img src="__PUBLIC__images/banner3.jpg"  alt="banner3" /></a></li>
                </ul>
            </div>
            <div class="hd">
                <ul>
                    <li class="on"></li>
                    <li></li>
                    <li></li>
                </ul>
            </div>
		</div>
		<div class="selection_top">
			<div class="nav">
				<ul>
					<li><a href="javascript:;">导航</a></li>
					<li><a href="javascript:;">最新商品</a></li>
					<li><a href="javascript:;">热销产品</a></li>
					<li><a href="javascript:;">推荐产品</a></li>
					<li><a href="javascript:;">婴儿沐浴</a></li>
					<li><a href="javascript:;">女士沐浴</a></li>
					<li><a href="javascript:;">男士沐浴</a></li>
					<li><a href="javascript:;" class="return">返回顶部</a></li>
				</ul>
			</div>
			<div class="container">
				<div class="hot">
					<div class="title">
						<span></span>
						<h1>爆款推荐</h1>
						<span>HOT</span>
					</div>
					<div class="show clear">
						<div class="box">
							<ul>
								<li><a href="pro_details.html"><img src="__PUBLIC__images/index_hot01.jpg" alt="index_hot01"></a></li>
								<li><a href="pro_details.html"><img src="__PUBLIC__images/index_hot02.jpg" alt="index_hot02"></a></li>
								<li><a href="pro_details.html"><img src="__PUBLIC__images/index_hot03.jpg" alt="index_hot03"></a></li>
								<li><a href="pro_details.html"><img src="__PUBLIC__images/index_hot04.jpg" alt="index_hot04"></a></li>
								<li><a href="pro_details.html"><img src="__PUBLIC__images/index_hot05.jpg" alt="index_hot05"></a></li>
								<li><a href="pro_details.html"><img src="__PUBLIC__images/index_hot03.jpg" alt="index_hot03"></a></li>
							</ul>
						</div>
						<a href="javascript:void(0);" class="prev">&lt;</a>	
						<a href="javascript:void(0);" class="next">&gt;</a>				
					</div>
				</div>				
				<div class="latest">
					<div class="title clear">
						<div class="left">
							<span></span>
							<h1>最新商品</h1>
							<span>Latest & commodity</span>
						</div>
						<div class="right">
							<span><a href="javascript:;" class="on">&lt;</a></span>
							<span><a href="javascript:;">&gt;</a></span>
						</div>						
					</div>
					<div class="show">
						<div class="box">
							<ul>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest01.png" alt="index_latest"></a>
									<h1><a href="pro_details.html">郁美净七果儿童洗发水沐浴露...</a></h1>
									<p>洗发沐浴一瓶两用柔润发丝清洁嫩肤</p>
									<span>¥ 27.90 <small>¥ 28.00</small></span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest02.PNG" alt="index_latest01"></a>
									<h1><a href="pro_details.html">安安金纯薰衣草沫浴沐浴露男女...</a></h1>
									<p>持久留香进口香料薰衣草香型 温和易...</p>
									<span>¥ 19.90 <small>¥ 45.00</small></span>
									
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest03.PNG" alt="index_latest02"></a>
									<h1><a href="pro_details.html">进口保税 日本COW牛乳石碱...</a></h1>
									<p>Bouncia沐浴乳牛奶花香550ml<</p>
									<span>¥ 55.00 <small>¥ 128.00</small></span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest04.png" alt="index_latest03"></a>
									<h1><a href="pro_details.html">海丝蓓康 维C杏仁沐浴乳...</a></h1>
									<p>温和沐浴肌肤 沐浴露</p>
									<span>99元</span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest.png" alt="index_latest04"></a>
									<h1><a href="pro_details.html">日本进口 可悠然 美肌沐浴露...</a></h1>
									<p>进口 温和 滋润 泡沫细腻 新老包装...</p>
									<span>56元 </span>
								</li>
							</ul>
						</div>
						<div class="box">
							<ul>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest02.PNG" alt="index_latest01"></a>
									<h1><a href="pro_details.html">安安金纯薰衣草沫浴沐浴露男女...</a></h1>
									<p>持久留香进口香料薰衣草香型 温和易...</p>
									<span>¥ 19.90 <small>¥ 45.00</small></span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest01.png" alt="index_latest"></a>
									<h1><a href="pro_details.html">郁美净七果儿童洗发水沐浴露...</a></h1>
									<p>洗发沐浴一瓶两用柔润发丝清洁嫩肤</p>
									<span>¥ 27.90 <small>¥ 28.00</small></span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest03.PNG" alt="index_latest02"></a>
									<h1><a href="pro_details.html">进口保税 日本COW牛乳石碱...</a></h1>
									<p>Bouncia沐浴乳牛奶花香550ml</p>
									<span>¥ 55.00 <small>¥ 128.00</small></span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest04.png" alt="index_latest03"></a>
									<h1><a href="pro_details.html">海丝蓓康 维C杏仁沐浴乳...</a></h1>
									<p> 温和沐浴肌肤 沐浴露</p>
									<span>99元</span>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_latest.png" alt="index_latest04"></a>
									<h1><a href="pro_details.html">日本进口 可悠然 美肌沐浴露...</a></h1>
									<p>进口 温和 滋润 泡沫细腻 新老包装...</p>
									<span>56元 </span>	
								</li>
							</ul>
						</div>				
					</div>				
				</div>
			</div>
		</div>		
		<div class="selection_middle clear">
			<div class="container">
				<div class="goods">
					<div class="title clear">
						<div class="left ">
							<span></span>
							<h1>热销商品</h1>
							<span>Hot & goods</span>
						</div>
						<div class="right">
							<ul>
								<li class="on"><a href="javascript:;">热门</a></li>
								<li><a href="javascript:;">男士</a></li>
								<li><a href="javascript:;">女士</a></li>
								<li><a href="javascript:;">婴儿</a></li>
							</ul>
						</div>
					</div>
					<div class="show">
						<div class="box">
							<ul>
								<li>
									<h2>LUX/力士</h2>
									<span>¥28.90 </span>
									<a href="pro_details.html">
										<img src="__PUBLIC__images/index_goods01.jpg" alt="index_goods01" />										
									</a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods02.jpg" alt="index_goods02" /></a>
									<h2><a href="pro_details.html">六神清凉爽肤沐浴露(绿茶甘草)..</a></h2>
									<p>¥ 36.90</p>
									<span>1947人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods03.jpg" alt="index_goods03" /></a>
									<h2><a href="pro_details.html">小米平板2 标准高透贴膜(2片装)</a></h2>
									<p>¥ 38.90 <span>¥ 118.00</span> </p>
									<span>1740人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods04.jpg" alt="index_goods04" /></a>
									<h2><a href="pro_details.html">红色小象婴儿沐浴露洗发二合...</a></h2>
									<p>¥ 34.80 <span>¥ 55.00</span></p>
									<span>1万人评论</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods05.jpg" alt="index_goods05" /></a>
									<h2><a href="pro_details.html">罗曼诺男士沐浴露香水沐浴乳...</a></h2>
									<p>¥ 39.90  <span>¥ 89.80</span></p>
									<span>1.5万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"></a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods07.jpg" alt="index_goods07" /></a>
									<h2><a href="pro_details.html">法国coco香水沐浴露800ml...</a></h2>
									<p>¥ 26.00 <span>¥ 56.00</span></p>
									<span>8000人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods08.jpg" alt="index_goods08" /></a>
									<h2><a href="pro_details.html">拉芳官方正品 多姿花香润肤...</a></h2>
									<p>¥ 19.90 <span>¥ 29.00 </span></p>
									<span>1.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods09.jpg" alt="index_goods09" /></a>
									<h2><a href="pro_details.html">澳雪海马经典香水沐浴露</a></h2>
									<p>¥ 49.90  <span>¥ 138.00</span></p>
									<span>2.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"> <img src="__PUBLIC__images/index_goods10.jpg"/ alt="index_goods10"></a>
									<h2>泊泉雅沐浴露...</h2>
									<p>¥ 15.99 <span>¥ 49.00 </span></p>
								</li>
								<li>	
									<a href="shop_list.html">
									<img src="__PUBLIC__images/index_goods11.jpg" alt="index_goods11" />										
									</a>
									<h2><a href="shop_list.html">浏览更多</a></h2>
									<span><a href="shop_list.html">热门</a></span>
								</li>
							</ul>
							<ul>
								<li>
									<h2>LUX/力士</h2>
									<span>¥28.90 </span>
									<a href="pro_details.html">
										<img src="__PUBLIC__images/index_goods01.jpg" alt="index_goods01" />										
									</a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods02.jpg" alt="index_goods02" /></a>
									<h2><a href="pro_details.html">六神清凉爽肤沐浴露(绿茶甘草)..</a></h2>
									<p>¥ 36.90</p>
									<span>1947人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods03.jpg" alt="index_goods03" /></a>
									<h2><a href="pro_details.html">小米平板2 标准高透贴膜(2片装)</a></h2>
									<p>¥ 38.90 <span>¥ 118.00</span> </p>
									<span>1740人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods04.jpg" alt="index_goods04" /></a>
									<h2><a href="pro_details.html">红色小象婴儿沐浴露洗发二合...</a></h2>
									<p>¥ 34.80 <span>¥ 55.00</span></p>
									<span>1万人评论</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods05.jpg" alt="index_goods05" /></a>
									<h2><a href="pro_details.html">罗曼诺男士沐浴露香水沐浴乳...</a></h2>
									<p>¥ 39.90  <span>¥ 89.80</span></p>
									<span>1.5万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"></a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods07.jpg" alt="index_goods07" /></a>
									<h2><a href="pro_details.html">法国coco香水沐浴露800ml...</a></h2>
									<p>¥ 26.00 <span>¥ 56.00</span></p>
									<span>8000人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods08.jpg" alt="index_goods08" /></a>
									<h2><a href="pro_details.html">拉芳官方正品 多姿花香润肤...</a></h2>
									<p>¥ 19.90 <span>¥ 29.00 </span></p>
									<span>1.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods09.jpg" alt="index_goods09" /></a>
									<h2><a href="pro_details.html">澳雪海马经典香水沐浴露</a></h2>
									<p>¥ 49.90  <span>¥ 138.00</span></p>
									<span>2.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"> <img src="__PUBLIC__images/index_goods10.jpg"/ alt="index_goods10"></a>
									<h2>泊泉雅沐浴露...</h2>
									<p>¥ 15.99 <span>¥ 49.00 </span></p>
								</li>
								<li>	
									<a href="shop_list.html">
									<img src="__PUBLIC__images/index_goods11.jpg" alt="index_goods11" />										
									</a>
									<h2><a href="shop_list.html">浏览更多</a></h2>
									<span><a href="shop_list.html">热门</a></span>
								</li>
							</ul>
							<ul>
								<li>
									<h2>LUX/力士</h2>
									<span>¥28.90 </span>
									<a href="pro_details.html">
										<img src="__PUBLIC__images/index_goods01.jpg" alt="index_goods01" />										
									</a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods02.jpg" alt="index_goods02" /></a>
									<h2><a href="pro_details.html">六神清凉爽肤沐浴露(绿茶甘草)..</a></h2>
									<p>¥ 36.90</p>
									<span>1947人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods03.jpg" alt="index_goods03" /></a>
									<h2><a href="pro_details.html">小米平板2 标准高透贴膜(2片装)</a></h2>
									<p>¥ 38.90 <span>¥ 118.00</span> </p>
									<span>1740人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods04.jpg" alt="index_goods04" /></a>
									<h2><a href="pro_details.html">红色小象婴儿沐浴露洗发二合...</a></h2>
									<p>¥ 34.80 <span>¥ 55.00</span></p>
									<span>1万人评论</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods05.jpg" alt="index_goods05" /></a>
									<h2><a href="pro_details.html">罗曼诺男士沐浴露香水沐浴乳...</a></h2>
									<p>¥ 39.90  <span>¥ 89.80</span></p>
									<span>1.5万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"></a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods07.jpg" alt="index_goods07" /></a>
									<h2><a href="pro_details.html">法国coco香水沐浴露800ml...</a></h2>
									<p>¥ 26.00 <span>¥ 56.00</span></p>
									<span>8000人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods08.jpg" alt="index_goods08" /></a>
									<h2><a href="pro_details.html">拉芳官方正品 多姿花香润肤...</a></h2>
									<p>¥ 19.90 <span>¥ 29.00 </span></p>
									<span>1.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods09.jpg" alt="index_goods09" /></a>
									<h2><a href="pro_details.html">澳雪海马经典香水沐浴露</a></h2>
									<p>¥ 49.90  <span>¥ 138.00</span></p>
									<span>2.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"> <img src="__PUBLIC__images/index_goods10.jpg"/ alt="index_goods10"></a>
									<h2>泊泉雅沐浴露...</h2>
									<p>¥ 15.99 <span>¥ 49.00 </span></p>
								</li>
								<li>	
									<a href="shop_list.html">
									<img src="__PUBLIC__images/index_goods11.jpg" alt="index_goods11" />										
									</a>
									<h2><a href="shop_list.html">浏览更多</a></h2>
									<span><a href="shop_list.html">热门</a></span>
								</li>
							</ul>
							<ul>
								<li>
									<h2>LUX/力士</h2>
									<span>¥28.90 </span>
									<a href="pro_details.html">
										<img src="__PUBLIC__images/index_goods01.jpg" alt="index_goods01" />										
									</a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods02.jpg" alt="index_goods02" /></a>
									<h2><a href="pro_details.html">六神清凉爽肤沐浴露(绿茶甘草)..</a></h2>
									<p>¥ 36.90</p>
									<span>1947人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods03.jpg" alt="index_goods03" /></a>
									<h2><a href="pro_details.html">小米平板2 标准高透贴膜(2片装)</a></h2>
									<p>¥ 38.90 <span>¥ 118.00</span> </p>
									<span>1740人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods04.jpg" alt="index_goods04" /></a>
									<h2><a href="pro_details.html">红色小象婴儿沐浴露洗发二合...</a></h2>
									<p>¥ 34.80 <span>¥ 55.00</span></p>
									<span>1万人评论</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods05.jpg" alt="index_goods05" /></a>
									<h2><a href="pro_details.html">罗曼诺男士沐浴露香水沐浴乳...</a></h2>
									<p>¥ 39.90  <span>¥ 89.80</span></p>
									<span>1.5万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"></a>

								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods07.jpg" alt="index_goods07" /></a>
									<h2><a href="pro_details.html">法国coco香水沐浴露800ml...</a></h2>
									<p>¥ 26.00 <span>¥ 56.00</span></p>
									<span>8000人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods08.jpg" alt="index_goods08" /></a>
									<h2><a href="pro_details.html">拉芳官方正品 多姿花香润肤...</a></h2>
									<p>¥ 19.90 <span>¥ 29.00 </span></p>
									<span>1.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_goods09.jpg" alt="index_goods09" /></a>
									<h2><a href="pro_details.html">澳雪海马经典香水沐浴露</a></h2>
									<p>¥ 49.90  <span>¥ 138.00</span></p>
									<span>2.8万人评价</span>
								</li>
								<li>
									<a href="pro_details.html"> <img src="__PUBLIC__images/index_goods10.jpg"/ alt="index_goods10"></a>
									<h2>泊泉雅沐浴露...</h2>
									<p>¥ 15.99 <span>¥ 49.00 </span></p>
								</li>
								<li>	
									<a href="shop_list.html">
									<img src="__PUBLIC__images/index_goods11.jpg" alt="index_goods11" />										
									</a>
									<h2><a href="shop_list.html">浏览更多</a></h2>
									<span><a href="shop_list.html">热门</a></span>
								</li>
							</ul>
						</div>
							
					</div>
				</div>
				
				<div class="recommend">
					<div class="title clear">
						<span></span>
						<h1>推荐产品</h1>
						<span>Hot & goods</span>
					</div>
					<div class="show">
						<div class="box">
							<ul>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_product01.jpg" alt="index_product01"></a>
									<div>
										<h1><a href="pro_details.html">Ornalia牛奶美白保湿滋润沐浴露</a></h1>
										<p>¥ 66.90 <span>¥ 238.00</span></p>
									</div>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_product02.jpg" alt="index_product02"></a>
									<div>
										<h1><a href="pro_details.html">五羊婴儿洗发水沐浴露二合一5</a></h1>
										<p>¥ 26.90 <span>¥ 138.00</span></p>
									</div>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_product03.jpg" alt="index_product03"></a>
									<div>
										<h1><a href="pro_details.html">进口保税 日本cow牛乳石碱沐...</a></h1>
										<p>¥ 109.00 <span>¥ 256.00</span></p>
									</div>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_product04.jpg" alt="index_product04"></a>
									<div>
										<h1><a href="pro_details.html">进口保税 日本cow牛乳石碱沐浴...</a></h1>
										<p>¥ 109.00 <span>¥ 256.00</span></p>
									</div>
									
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_product05.jpg" alt="index_product05"></a>

									<div>
										<h1><a href="pro_details.html">韩国进口所望牛奶沐浴露...</a></h1>
										<p>¥ 116.00 <span>¥ 598.00</span></p>
									</div>
									
								</li>
							
							</ul>
						</div>
										
					</div>
				</div>
				<div class="baby clear">
					<div class="title clear">
						<div class="left">
							<span></span>
							<h1>婴儿沐浴露</h1>
							<span>baby & bath</span>
						</div>
						<div class="right">
							<ul>
								<li class="on"><a href="javascript:;">大陆</a></li>
								<li><a href="javascript:;">日本</a></li>
								<li><a href="javascript:;">德国</a></li>
								<li><a href="javascript:;">其他国家</a></li>
							</ul>
						</div>
					</div>
					<div class="list clear">
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">好孩子婴儿沐浴...</a></h1>
									<h2>无泪宝宝洗护用品新生儿童泡泡浴</h2>
									<p>¥29.80元 <span>¥48.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby01.png" alt="index_baby01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby02.jpg" alt="index_baby02" /></a>
									<h2><a href="pro_details.html">英国哈丁宝贝 婴儿沐浴露洗...</a></h2>
									<span>黑蜂蜜精华 无泪配方 舒缓肌肤 滋养发质</span>
									<p>¥36.90元 <span>¥169.00元</span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby03.jpg" alt="index_baby03" /></a>
									<h2><a href="pro_details.html">加菲猫宝宝洗发沐浴露二合一</a></h2>
									<span>安全温和无泪配方无刺激</span>
									<p>¥26.00元  <span>¥30.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby04.jpg" alt="index_baby04" /></a>
									<h2><a href="pro_details.html">启初婴儿洗发水沐浴露...</a></h2>
									<h3>儿童洗浴洗护用品组合装温和无泪</h3>
									 <span>¥60.00元 </span>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby05.png" alt="index_baby05" /></a>
									<h1><a href="pro_details.html">惠氏宝宝沐浴乳 </a></h1>
									<h2><a href="pro_details.html">婴儿洗发水沐浴露二合一 新生儿童洗发水无泪配方</a></h2>
									<p>¥54.9元  <span>¥110.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">好孩子婴儿沐浴...</a></h1>
									<h2>无泪宝宝洗护用品新生儿童泡泡浴</h2>
									<p>¥29.80元 <span>¥48.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby01.png" alt="index_baby01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby02.jpg" alt="index_baby02" /></a>
									<h2><a href="pro_details.html">英国哈丁宝贝 婴儿沐浴露洗...</a></h2>
									<span>黑蜂蜜精华 无泪配方 舒缓肌肤 滋养发质</span>
									<p>¥36.90元 <span>¥169.00元</span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby03.jpg" alt="index_baby03" /></a>
									<h2><a href="pro_details.html">加菲猫宝宝洗发沐浴露二合一</a></h2>
									<span>安全温和无泪配方无刺激</span>
									<p>¥26.00元  <span>¥30.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby04.jpg" alt="index_baby04" /></a>
									<h2><a href="pro_details.html">启初婴儿洗发水沐浴露...</a></h2>
									<h3>儿童洗浴洗护用品组合装温和无泪</h3>
									 <span>¥60.00元 </span>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby05.png" alt="index_baby05" /></a>
									<h1><a href="pro_details.html">惠氏宝宝沐浴乳 </a></h1>
									<h2><a href="pro_details.html">婴儿洗发水沐浴露二合一 新生儿童洗发水无泪配方</a></h2>
									<p>¥54.9元  <span>¥110.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">好孩子婴儿沐浴...</a></h1>
									<h2>无泪宝宝洗护用品新生儿童泡泡浴</h2>
									<p>¥29.80元 <span>¥48.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby01.png" alt="index_baby01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby02.jpg" alt="index_baby02" /></a>
									<h2><a href="pro_details.html">英国哈丁宝贝 婴儿沐浴露洗...</a></h2>
									<span>黑蜂蜜精华 无泪配方 舒缓肌肤 滋养发质</span>
									<p>¥36.90元 <span>¥169.00元</span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby03.jpg" alt="index_baby03" /></a>
									<h2><a href="pro_details.html">加菲猫宝宝洗发沐浴露二合一</a></h2>
									<span>安全温和无泪配方无刺激</span>
									<p>¥26.00元  <span>¥30.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby04.jpg" alt="index_baby04" /></a>
									<h2><a href="pro_details.html">启初婴儿洗发水沐浴露...</a></h2>
									<h3>儿童洗浴洗护用品组合装温和无泪</h3>
									 <span>¥60.00元 </span>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby05.png" alt="index_baby05" /></a>
									<h1><a href="pro_details.html">惠氏宝宝沐浴乳 </a></h1>
									<h2><a href="pro_details.html">婴儿洗发水沐浴露二合一 新生儿童洗发水无泪配方</a></h2>
									<p>¥54.9元  <span>¥110.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">好孩子婴儿沐浴...</a></h1>
									<h2>无泪宝宝洗护用品新生儿童泡泡浴</h2>
									<p>¥29.80元 <span>¥48.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby01.png" alt="index_baby01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby02.jpg" alt="index_baby02" /></a>
									<h2><a href="pro_details.html">英国哈丁宝贝 婴儿沐浴露洗...</a></h2>
									<span>黑蜂蜜精华 无泪配方 舒缓肌肤 滋养发质</span>
									<p>¥36.90元 <span>¥169.00元</span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby03.jpg" alt="index_baby03" /></a>
									<h2><a href="pro_details.html">加菲猫宝宝洗发沐浴露二合一</a></h2>
									<span>安全温和无泪配方无刺激</span>
									<p>¥26.00元  <span>¥30.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby04.jpg" alt="index_baby04" /></a>
									<h2><a href="pro_details.html">启初婴儿洗发水沐浴露...</a></h2>
									<h3>儿童洗浴洗护用品组合装温和无泪</h3>
									 <span>¥60.00元 </span>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_baby05.png" alt="index_baby05" /></a>
									<h1><a href="pro_details.html">惠氏宝宝沐浴乳 </a></h1>
									<h2><a href="pro_details.html">婴儿洗发水沐浴露二合一 新生儿童洗发水无泪配方</a></h2>
									<p>¥54.9元  <span>¥110.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="ladies clear " >
					<div class="title clear">
						<div class="left ">
							<span></span>
							<h1>女士沐浴露</h1>
							<span>Ladies & Shower Gel</span>
						</div>
						<div class="right">
							<ul>
								<li class="on"><a href="javascript:;">大陆</a></li>
								<li><a href="javascript:;">日本</a></li>
								<li><a href="javascript:;">德国</a></li>
								<li><a href="javascript:;">其他国家</a></li>
							</ul>
						</div>
					</div>
					<div class="list clear">
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">玫瑰香沐浴露</a></h1>
									<h2>持久留香补水保湿家庭装</h2>
									<p>¥21.80元 <span>¥41.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie01.png" alt="index_ladie01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie02.jpg" alt="index_ladie02" /></a>
									<h2><a href="pro_details.html">卓蓝雅时空仙境香水沐浴露 </a></h2>
									<span>保湿滋润 持久留香 补水养护</span>
									<p>¥36.00元 <span>¥69.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie03.jpg" alt="index_ladie03" /></a>
									<h2><a href="pro_details.html">索芙特橄榄沐浴露</a></h2>
									<span>女士润肤沐浴乳留香,清新活润 橄榄美肌</span>
									<p>¥26.80元 <span>¥49.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie04.jpg" alt="index_ladie04" /></a>
									<h2><a href="pro_details.html">仙维娜正品橄榄嫩肤沐浴露</a></h2>
									<h3>女士保湿嫩滑滋润持久留香</h3>
									 <p>¥53.80元 <span> ¥76.00</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie05.png" alt="index_ladie05" /></a>
									<h1><a href="pro_details.html">六神沐浴露</a></h1>
									<h2>甘草健肤沐浴露清雅淡香植物精华</h2>
									<p>¥79.9元  <span>¥108.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>	
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">玫瑰香沐浴露</a></h1>
									<h2>持久留香补水保湿家庭装</h2>
									<p>¥21.80元 <span>¥41.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie01.png" alt="index_ladie01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie02.jpg" alt="index_ladie02" /></a>
									<h2><a href="pro_details.html">卓蓝雅时空仙境香水沐浴露 </a></h2>
									<span>保湿滋润 持久留香 补水养护</span>
									<p>¥36.00元 <span>¥69.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie03.jpg" alt="index_ladie03" /></a>
									<h2><a href="pro_details.html">索芙特橄榄沐浴露</a></h2>
									<span>女士润肤沐浴乳留香,清新活润 橄榄美肌</span>
									<p>¥26.80元 <span>¥49.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie04.jpg" alt="index_ladie04" /></a>
									<h2><a href="pro_details.html">仙维娜正品橄榄嫩肤沐浴露</a></h2>
									<h3>女士保湿嫩滑滋润持久留香</h3>
									 <p>¥53.80元 <span> ¥76.00</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie05.png" alt="index_ladie05" /></a>
									<h1><a href="pro_details.html">六神沐浴露</a></h1>
									<h2>甘草健肤沐浴露清雅淡香植物精华</h2>
									<p>¥79.9元  <span>¥108.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>	
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">玫瑰香沐浴露</a></h1>
									<h2><a href="pro_details.html">卓蓝雅时空仙境香水沐浴露 </a></h2>
									<p>¥21.80元 <span>¥41.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie01.png" alt="index_ladie01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie02.jpg" alt="index_ladie02" /></a>
									<h2>卓蓝雅时空仙境香水沐浴露 </h2>
									<span>保湿滋润 持久留香 补水养护</span>
									<p>¥36.00元 <span>¥69.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie03.jpg" alt="index_ladie03" /></a>
									<h2><a href="pro_details.html">索芙特橄榄沐浴露</a></h2>
									<span>女士润肤沐浴乳留香,清新活润 橄榄美肌</span>
									<p>¥26.80元 <span>¥49.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie04.jpg" alt="index_ladie04" /></a>
									<h2><a href="pro_details.html">仙维娜正品橄榄嫩肤沐浴露</a></h2>
									<h3>女士保湿嫩滑滋润持久留香</h3>
									 <p>¥53.80元 <span> ¥76.00</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie05.png" alt="index_ladie05" /></a>
									<h1><a href="pro_details.html">六神沐浴露</a></h1>
									<h2>甘草健肤沐浴露清雅淡香植物精华</h2>
									<p>¥79.9元  <span>¥108.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>	
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">玫瑰香沐浴露</a></h1>
									<h2><a href="pro_details.html">卓蓝雅时空仙境香水沐浴露 </a></h2>
									<p>¥21.80元 <span>¥41.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie01.png" alt="index_ladie01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie02.jpg" alt="index_ladie02" /></a>
									<h2>卓蓝雅时空仙境香水沐浴露 </h2>
									<span>保湿滋润 持久留香 补水养护</span>
									<p>¥36.00元 <span>¥69.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie03.jpg" alt="index_ladie03" /></a>
									<h2><a href="pro_details.html">索芙特橄榄沐浴露</a></h2>
									<span>女士润肤沐浴乳留香,清新活润 橄榄美肌</span>
									<p>¥26.80元 <span>¥49.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie04.jpg" alt="index_ladie04" /></a>
									<h2><a href="pro_details.html">仙维娜正品橄榄嫩肤沐浴露</a></h2>
									<h3>女士保湿嫩滑滋润持久留香</h3>
									 <p>¥53.80元 <span> ¥76.00</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_ladie05.png" alt="index_ladie05" /></a>
									<h1><a href="pro_details.html">六神沐浴露</a></h1>
									<h2>甘草健肤沐浴露清雅淡香植物精华</h2>
									<p>¥79.9元  <span>¥108.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>	
						</div>
					</div>
				</div>
				<div class="men clear">
					<div class="title clear">
						<div class="left ">
							<span></span>
							<h1>男士沐浴露</h1>
							<span>Men & Shower Gel</span>
						</div>
						<div class="right">
							<ul>
								<li class="on"><a href="javascript:;">大陆</a></li>
								<li><a href="javascript:;">日本</a></li>
								<li><a href="javascript:;">德国</a></li>
								<li><a href="javascript:;">其他国家</a></li>
							</ul>
						</div>
					</div>
					<div class="list">
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">不添加防腐剂</a></h1>
									<h2>香氛沐浴露男士全身滋润沐浴乳</h2>
									<p>¥42.80元<span> ¥99.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men01.png" alt="index_men01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men02.jpg" alt="index_men02" /></a>
									<h2><a href="pro_details.html">曼秀雷敦沐浴露男</a></h2>
									<span>持久留香补水沐浴乳 活碳保湿滋润全身</span>
									<p>¥32.90元 <span>¥99.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men03.jpg" alt="index_men03" /></a>
									<h2><a href="pro_details.html">遇见香芬小黑裙沐浴露</a></h2>
									<span>香水持久留香男士补水去鸡皮肤</span>
									<p>¥48.80元 <span>¥148.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men04.jpg" alt="index_men04" /></a>
									<h2><a href="pro_details.html">香港正品COCO香氛沐浴露</a></h2>
									<h3>香水配方清新留香男士夏季保湿滋润补水</h3>
									 <p>¥18.80元  <span>¥68.00</span> </p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men05.png" alt="index_men05" /></a>
									<h1><a href="pro_details.html">凌仕/Lynx男士</a></h1>
									<h2>男士醒体香水香氛沐浴露诱因400ml*2瓶(X战警版) 赠浴球</h2>
									<p>¥48.5元 <span>¥61.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">不添加防腐剂</a></h1>
									<h2>香氛沐浴露男士全身滋润沐浴乳</h2>
									<p>¥42.80元<span> ¥99.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men01.png" alt="index_men01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men02.jpg" alt="index_men02" /></a>
									<h2><a href="pro_details.html">曼秀雷敦沐浴露男</a></h2>
									<span>持久留香补水沐浴乳 活碳保湿滋润全身</span>
									<p>¥32.90元 <span>¥99.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men03.jpg" alt="index_men03" /></a>
									<h2><a href="pro_details.html">遇见香芬小黑裙沐浴露</a></h2>
									<span>香水持久留香男士补水去鸡皮肤</span>
									<p>¥48.80元 <span>¥148.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men04.jpg" alt="index_men04" /></a>
									<h2><a href="pro_details.html">香港正品COCO香氛沐浴露</a></h2>
									<h3>香水配方清新留香男士夏季保湿滋润补水</h3>
									 <p>¥18.80元  <span>¥68.00</span> </p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men05.png" alt="index_men05" /></a>
									<h1><a href="pro_details.html">凌仕/Lynx男士</a></h1>
									<h2>男士醒体香水香氛沐浴露诱因400ml*2瓶(X战警版) 赠浴球</h2>
									<p>¥48.5元 <span>¥61.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">不添加防腐剂</a></h1>
									<h2>香氛沐浴露男士全身滋润沐浴乳</h2>
									<p>¥42.80元<span> ¥99.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men01.png" alt="index_men01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men02.jpg" alt="index_men02" /></a>
									<h2><a href="pro_details.html">曼秀雷敦沐浴露男</a></h2>
									<span>持久留香补水沐浴乳 活碳保湿滋润全身</span>
									<p>¥32.90元 <span>¥99.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men03.jpg" alt="index_men03" /></a>
									<h2><a href="pro_details.html">遇见香芬小黑裙沐浴露</a></h2>
									<span>香水持久留香男士补水去鸡皮肤</span>
									<p>¥48.80元 <span>¥148.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men04.jpg" alt="index_men04" /></a>
									<h2><a href="pro_details.html">香港正品COCO香氛沐浴露</a></h2>
									<h3>香水配方清新留香男士夏季保湿滋润补水</h3>
									 <p>¥18.80元  <span>¥68.00</span> </p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men05.png" alt="index_men05" /></a>
									<h1><a href="pro_details.html">凌仕/Lynx男士</a></h1>
									<h2>男士醒体香水香氛沐浴露诱因400ml*2瓶(X战警版) 赠浴球</h2>
									<p>¥48.5元 <span>¥61.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
						<div class="products clear">
							<ul>
								<li>
									<h1><a href="pro_details.html">不添加防腐剂</a></h1>
									<h2>香氛沐浴露男士全身滋润沐浴乳</h2>
									<p>¥42.80元<span> ¥99.50元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men01.png" alt="index_men01" /></a>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men02.jpg" alt="index_men02" /></a>
									<h2><a href="pro_details.html">曼秀雷敦沐浴露男</a></h2>
									<span>持久留香补水沐浴乳 活碳保湿滋润全身</span>
									<p>¥32.90元 <span>¥99.00元 </span></p>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men03.jpg" alt="index_men03" /></a>
									<h2><a href="pro_details.html">遇见香芬小黑裙沐浴露</a></h2>
									<span>香水持久留香男士补水去鸡皮肤</span>
									<p>¥48.80元 <span>¥148.00元</span></p>	
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men04.jpg" alt="index_men04" /></a>
									<h2><a href="pro_details.html">香港正品COCO香氛沐浴露</a></h2>
									<h3>香水配方清新留香男士夏季保湿滋润补水</h3>
									 <p>¥18.80元  <span>¥68.00</span> </p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
								<li>
									<a href="pro_details.html"><img src="__PUBLIC__images/index_men05.png" alt="index_men05" /></a>
									<h1><a href="pro_details.html">凌仕/Lynx男士</a></h1>
									<h2>男士醒体香水香氛沐浴露诱因400ml*2瓶(X战警版) 赠浴球</h2>
									<p>¥48.5元 <span>¥61.00元</span></p>
									<button class="btn btn-default" ><a href="confirm.html">立即购买</a></button>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<!--footer-->
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
<!--/footer-->