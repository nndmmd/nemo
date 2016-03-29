<?php
/* Smarty version 3.1.29, created on 2016-03-29 02:35:01
  from "/var/www/html/nemo/app/views/app-home.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f9e9d5acb7e7_05540287',
  'file_dependency' => 
  array (
    '42a118d11e1715e9d83b608c165bf0f55fe7a51d' => 
    array (
      0 => '/var/www/html/nemo/app/views/app-home.html',
      1 => 1458697714,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f9e9d5acb7e7_05540287 ($_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="assets/lib/html5.js"></script>
<script type="text/javascript" src="assets/lib/respond.min.js"></script>
<script type="text/javascript" src="assets/lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/H-ui.css" />
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-Switch/bootstrapSwitch.css" />
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="assets/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>应用商店</title>
<meta name="keywords" content="app,store">
<meta name="description" content="应用商店">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-black navbar-fixed-top">
		<div class="container cl">
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="/nemo/public/appstore">App Store 应用商店</a>
			<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">AppStore</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">软件 &middot; 组件 &middot; 接口</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
				<ul class="cl">
					<li class="current"><a href="/nemo/public/appstore">返回首页</a></li>
					<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">应用分类检索 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">装机必备软件</a></li>
							<li><a href="#">部门应用导航<i class="arrow Hui-iconfont">&#xe6d7;</i></a>
								<ul class="menu">
									<li><a href="javascript:;">信息技术部<i class="arrow Hui-iconfont">&#xe6d7;</i></a>
										<ul class="menu">
											<li><a href="javascript:;">特色业务</a></li>
											<li><a href="javascript:;">应用组件</a></li>
											<li><a href="javascript:;">应用接口</a></li>
										</ul>
									</li>
									<li><a href="#">人力资源部</a></li>
								</ul>
							</li>
							<li><a href="#">邮件系统</a></li>
							<li class="disabled"><a href="javascript:;">内部测试</a></li>
						</ul>
					</li>
					<li><a href="#">联系我们</a></li>
				</ul>
				<ul class="Hui-userbar hidden-xs">
					<li id="Hui-msg"> <a href="#" title="消息"><span class="badge badge-danger">15</span><i class="Hui-iconfont" style="font-size:18px">&#xe68a;</i></a> </li>
					<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">admin <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu radius box-shadow">
							<li><a href="#">个人信息</a></li>
							<li><a href="#">切换账户</a></li>
							<li><a href="#">退出</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<!-- 广告幻灯片及搜索条 -->
<div class="col-xs-offset-1 col-sm-offset-1 col-md-offset-4 col-lg-offset-4 " style="width:33%;position:absolute;top:115px;z-index:2">
	<form method="get" action="">
		<table class="table">
		<tbody>
		<tr>
		<td width="80%"><input type="text" placeholder="请输入关键词" class="input-text radius size-L" name="search_text" value="" id="search_text" autocomplete="off"></td>
		<td><button type="submit" class="btn btn-danger size-L radius" id="search_button">搜索</button></td>
		</tr>
		</tbody>
		</table>
	</form>
</div>
<div id="slider-ad">
	<div class="slider">
		<div class="bd">
			<ul>
				<li><a href="#" target="_blank"><img src="assets/images/2.png" ></a></li>
				<li><a href="#" target="_blank"><img src="assets/images/3.png" ></a></li>
				<li><a href="#" target="_blank"><img src="assets/images/1.png" ></a></li>
				<li><a href="#" target="_blank"><img src="assets/images/4.png" ></a></li>
			</ul>
		</div>
		<ol class="hd cl dots">
			<li>1</li>
			<li>2</li>
			<li>3</li>
			<li>4</li>
		</ol>
	</div>
</div>	

<section class="container">

<div class="panel panel-danger radius mt-10">
	<div class="panel-header">热门应用</div>
	<div class="panel-body">
	<!--div class="panel-body" style="height:1000px"-->
	<table class="table col-md-4">
		<tbody>
		<tr> <td width="33.33%">
		<img src="assets/images/app1.png" alt="app1" class="img-responsive radius"> 
		<span class="label label-default radius">数据留声机</span>
		<span class="badge badge-danger radius">31</span>
		</td> <td width="33.33%">
		<img src="assets/images/app2.png" alt="app2" class="img-responsive radius"> 
		<span class="label label-default radius">平台监控</span>
		<span class="badge badge-danger radius">3</span>
		</td> <td width="33.33%">
		<img src="assets/images/app3.png" alt="app3" class="img-responsive radius"> 
		<span class="label label-default radius">豆果美食</span>
		<span class="badge badge-danger radius">45</span>
		</td> </tr>
		<tr> <td width="33.33%">
		<img src="assets/images/app4.png" alt="app1" class="img-responsive radius"> 
		<span class="label label-default radius">排班神器</span>
		<span class="badge badge-danger radius">23</span>
		</td> <td width="33.33%">
		<img src="assets/images/app5.png" alt="app2" class="img-responsive radius"> 
		<span class="label label-default radius">云主机</span>
		<span class="badge badge-danger radius">41</span>
		</td> <td width="33.33%">
		<img src="assets/images/app6.png" alt="app3" class="img-responsive radius"> 
		<span class="label label-default radius">社区金融</span>
		<span class="badge badge-danger radius">88</span>
		</td> </tr>
		</tbody>
	</table>
	<table class="table col-md-4">
		<tbody>
		<tr> <td width="33.33%">
		<img src="assets/images/app1.png" alt="app1" class="img-responsive radius"> 
		<span class="label label-default radius">数据留声机</span>
		<span class="badge badge-danger radius">74</span>
		</td> <td width="33.33%">
		<img src="assets/images/app2.png" alt="app2" class="img-responsive radius"> 
		<span class="label label-default radius">平台监控</span>
		<span class="badge badge-danger radius">5</span>
		</td> <td width="33.33%">
		<img src="assets/images/app3.png" alt="app3" class="img-responsive radius"> 
		<span class="label label-default radius">豆果美食</span>
		<span class="badge badge-danger radius">72</span>
		</td> </tr>
		<tr> <td width="33.33%">
		<img src="assets/images/app4.png" alt="app1" class="img-responsive radius"> 
		<span class="label label-default radius">排班神器</span>
		<span class="badge badge-danger radius">36</span>
		</td> <td width="33.33%">
		<img src="assets/images/app5.png" alt="app2" class="img-responsive radius"> 
		<span class="label label-default radius">云主机</span>
		<span class="badge badge-danger radius">63</span>
		</td> <td width="33.33%">
		<img src="assets/images/app6.png" alt="app3" class="img-responsive radius"> 
		<span class="label label-default radius">社区金融</span>
		<span class="badge badge-danger radius">38</span>
		</td> </tr>
		</tbody>
	</table>
	<table class="table col-md-4">
		<tbody>
		<tr> <td width="33.33%">
		<img src="assets/images/app1.png" alt="app1" class="img-responsive radius"> 
		<span class="label label-default radius">数据留声机</span>
		<span class="badge badge-danger radius">30</span>
		</td> <td width="33.33%">
		<img src="assets/images/app2.png" alt="app2" class="img-responsive radius"> 
		<span class="label label-default radius">平台监控</span>
		<span class="badge badge-danger radius">39</span>
		</td> <td width="33.33%">
		<img src="assets/images/app3.png" alt="app3" class="img-responsive radius"> 
		<span class="label label-default radius">豆果美食</span>
		<span class="badge badge-danger radius">76</span>
		</td> </tr>
		<tr> <td width="33.33%">
		<img src="assets/images/app4.png" alt="app1" class="img-responsive radius"> 
		<span class="label label-default radius">排班神器</span>
		<span class="badge badge-danger radius">4</span>
		</td> <td width="33.33%">
		<img src="assets/images/app5.png" alt="app2" class="img-responsive radius"> 
		<span class="label label-default radius">云主机</span>
		<span class="badge badge-danger radius">65</span>
		</td> <td width="33.33%">
		<img src="assets/images/app6.png" alt="app3" class="img-responsive radius"> 
		<span class="label label-default radius">社区金融</span>
		<span class="badge badge-danger radius">53</span>
		</td> </tr>
		</tbody>
	</table>
	</div>
	<div class="panel-body" align="center">热门应用</div> <!-- 不加此项会撑开 -->
</div>

<div class="line"></div>

</section>
<footer class="footer mt-20">
	<div class="container">
		<nav class="footer-nav">
			<a target="_blank" href="/aboutHui.shtml">关于App Store</a>
			<span class="pipe">|</span>
			<a target="_blank" href="/copyright.shtml">软件著作权</a>
			<span class="pipe">|</span>
			<a target="_blank" href="/juanzeng.shtml">技术支持</a>
		</nav>
		<p>Copyright &copy;2013-2016 CCB All Rights Reserved. <br>
		<a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">滇ICP备000000号-0</a><br>
		未经允许，禁止转载、抄袭、镜像<br>
		联系电话0871-63060878</p>
	</div>
</footer>

<script type="text/javascript" src="assets/lib/jquery/1.9.1/jquery.min.js"></script> 
<script type="text/javascript" src="assets/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"></script>
<script type="text/javascript" src="assets/lib/jQuery.autocomplete/1.1/jquery.autocomplete.js"></script> 
<script type="text/javascript" src="assets/lib/layer/2.1/layer.js"></script> 
<script type="text/javascript" src="assets/lib/laypage/1.2/laypage.js"></script> 
<script type="text/javascript" src="assets/lib/My97DatePicker/WdatePicker.js"></script> 
<script type="text/javascript" src="assets/lib/icheck/jquery.icheck.min.js"></script> 
<script type="text/javascript" src="assets/lib/bootstrap-Switch/bootstrapSwitch.js"></script> 
<script type="text/javascript" src="assets/lib/Validform/5.3.2/Validform.min.js"></script> 
<script type="text/javascript" src="assets/lib/Validform/5.3.2/passwordStrength-min.js"></script>
<script type="text/javascript" src="assets/static/h-ui/js/H-ui.js"></script>
<script>
var navigation = responsiveNav("Hui-navbar", {customToggle: ".nav-toggle"});

$(function(){
	$('.skin-minimal input').iCheck({
		checkboxClass: 'icheckbox-blue',
		radioClass: 'iradio-blue',
		increaseArea: '20%'
	});
	$("#demoform").Validform({
		tiptype:2
	});
});

$(function(){
	jQuery("#slider-ad .slider").slide({mainCell:".bd ul",titCell:".hd li",trigger:"click",effect:"leftLoop",autoPlay:true,delayTime:700,interTime:3000,pnLoop:false,titOnClassName:"active"});
});

$("#search_text").autocomplete(["abc","asdf","c++","java", "php", "coldfusion","javascript"], { 
width: 320, 
max: 10,
highlight: false, 
multiple: true, 
multipleSeparator: "", 
scroll: true, 
scrollHeight: 300 
}); 

</script>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2015-8-4 -->
<?php }
}
