<?php
/* Smarty version 3.1.29, created on 2016-03-24 01:50:46
  from "/var/www/html/tinylara/app/views/app-detail.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f347f683a713_19674400',
  'file_dependency' => 
  array (
    'c3c962e90d071c4159921cea14129ea254e8e00b' => 
    array (
      0 => '/var/www/html/tinylara/app/views/app-detail.html',
      1 => 1458784197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56f347f683a713_19674400 ($_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9558956456f347f6816b92_81835884';
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
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/html5.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/respond.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/PIE_IE678.js"><?php echo '</script'; ?>
>
<![endif]-->
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/H-ui.css" />
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/H-ui.admin.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-Switch/bootstrapSwitch.css" />
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/style.css" />
<!--[if IE 6]>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/DD_belatedPNG_0.0.8a-min.js" ><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>DD_belatedPNG.fix('*');<?php echo '</script'; ?>
>
<![endif]-->

<title>应用商店</title>
<meta name="keywords" content="app,store">
<meta name="description" content="应用商店">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-black navbar-fixed-top">
		<div class="container cl">
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="<?php echo $_smarty_tpl->tpl_vars['app_store_home']->value;?>
">App Store 应用商店</a>
			<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">AppStore</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">软件 &middot; 组件 &middot; 接口</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
				<ul class="cl">
					<li class="current"><a href="<?php echo $_smarty_tpl->tpl_vars['app_store_home']->value;?>
">返回首页</a></li>
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

<section class="container">

<div class="panel panel-danger radius mt-10">
	<div class="panel-header">应用详情</div>
	<div class="panel-body">
	<!--table class="table col-md-12 table-border table-bordered"-->
	<!--table class="table col-md-12"-->
	<table class="table col-md-12">
		<tbody>
		<tr> <td class="va-t" width="80%">
			<h2><?php echo $_smarty_tpl->tpl_vars['app_detail']->value['name'];?>
</h2>
			<h4>开发商：<?php echo $_smarty_tpl->tpl_vars['app_detail']->value['author'];?>
<h4>
			<h6><?php echo $_smarty_tpl->tpl_vars['app_detail']->value['slogan'];?>
<h6>
		</td> <td>
			<section class="share cl">
				<div class="bdsharebuttonbox Hui-share">
					<span class="share-text Hui-iconfont"><h3>&#xe715;</h3></span>
					<a href="#" class="bds_weixin Hui-iconfont" data-cmd="weixin" title="分享到微信"><h3>&#xe694;</h3></a>
					<a href="#" class="bds_qzone Hui-iconfont" data-cmd="qzone" title="分享到QQ空间"><h3>&#xe6c8;</h3></a>	
					<a href="#" class="bds_sqq Hui-iconfont" data-cmd="sqq" title="分享到QQ好友"><h3>&#xe67b;</h3></a>
					<a href="#" class="bds_tsina Hui-iconfont" data-cmd="tsina" title="分享到新浪微博"><h3>&#xe6da;</h3></a>
					<a href="#" class="bds_tqq Hui-iconfont" data-cmd="tqq" title="分享到腾讯微博"><h3>&#xe6d9;</h3></a>
					<a href="#" class="bds_douban Hui-iconfont" data-cmd="douban" title="分享到豆瓣网"><h3>&#xe67c;</h3></a>
				</div>
				<?php echo '<script'; ?>
 type="text/javascript">
				window._bd_share_config={
					"common":{
						"bdSnsKey":{},
						"bdText":"",
						"bdMini":"2",
						"bdMiniList":false,
						"bdPic":"",
						"bdStyle":"0",
					},
					"share":{},
					"image":{
						"viewList":["weixin","qzone","sqq","tsina","tqq","douban"],
						"viewText":"分享到：","viewSize":"16"
					},
					"selectShare":{
						"bdContainerClass":null,
						"bdSelectMiniList":["weixin","qzone","sqq","tsina","tqq","douban"]
					}
				};
				with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
				<?php echo '</script'; ?>
>
			</section>
		</td> </tr>
		</tbody>
	</table>
	<!--table class="table col-md-12 table-border table-bordered"-->
	<table class="table col-md-12">
		<tbody>
		<tr> <td class="va-t" width="20%">
		<img src="assets/images/app5.png" alt="app1" class="img-responsive radius mt-10"> 
		<span class="label label-primary radius">Win XP</span>
		<span class="label label-primary radius">Win 7/8</span>
		<span class="label label-primary radius">Win 10</span>
		<span class="label label-secondary radius">IE8+</span>
		<span class="label label-secondary radius">Chrome</span>
		<span class="label label-secondary radius">360浏览器</span>
		<span class="label label-danger radius">下载 519 次</span>
		</td> <td width="80%">
			<div class="panel panel-default">
				<div class="panel-header">应用简介</div>
				<div class="panel-body">
				<h6><?php echo $_smarty_tpl->tpl_vars['app_detail']->value['introduction'];?>
</h6>
				</div>
			</div>
			<div class="panel panel-default mt-10">
				<div class="panel-header">版本更新记录</div>
				<div class="panel-body">
				<h6><?php echo $_smarty_tpl->tpl_vars['app_detail']->value['history'];?>
</h6>
				</div>
			</div>
			<div class="panel panel-default mt-10">
				<div class="panel-header">获取应用</div>
				<div class="panel-body">
<input class="btn btn-danger radius size-L" type="button" value="下载应用">
<input class="btn btn-danger radius size-L" type="button" value="直接访问">
				</div>
			</div>
		</td> </tr>
		</tbody>
	</table>
	</div>
	<div class="panel-body" align="center">返回顶部</div> <!-- 不加此项会撑开 -->
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

<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/jquery/1.9.1/jquery.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/jquery.SuperSlide/2.1.1/jquery.SuperSlide.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/jQuery.autocomplete/1.1/jquery.autocomplete.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/layer/2.1/layer.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/laypage/1.2/laypage.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/My97DatePicker/WdatePicker.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/icheck/jquery.icheck.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/bootstrap-Switch/bootstrapSwitch.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/Validform/5.3.2/Validform.min.js"><?php echo '</script'; ?>
> 
<?php echo '<script'; ?>
 type="text/javascript" src="assets/lib/Validform/5.3.2/passwordStrength-min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="assets/static/h-ui/js/H-ui.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
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

<?php echo '</script'; ?>
>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2015-8-4 -->
<?php }
}
