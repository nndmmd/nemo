<?php
/* Smarty version 3.1.29, created on 2016-03-25 09:31:30
  from "/var/www/html/tinylara/app/views/demo.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_56f50572418762_43698453',
  'file_dependency' => 
  array (
    'cea97570391cfd550cecdda04f5024f74704cc79' => 
    array (
      0 => '/var/www/html/tinylara/app/views/demo.html',
      1 => 1458114938,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 0,
),true)) {
function content_56f50572418762_43698453 ($_smarty_tpl) {
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
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/H-ui.min.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/icheck/icheck.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/Hui-iconfont/1.0.7/iconfont.css" />
<link rel="stylesheet" type="text/css" href="assets/lib/bootstrap-Switch/bootstrapSwitch.css" />
<link rel="stylesheet" type="text/css" href="assets/static/h-ui/css/style.css" />
<!--[if IE 6]>
<script type="text/javascript" src="assets/lib/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->

<title>dog1</title>
<meta name="keywords" content="关键词,5个左右,单个8汉字以内">
<meta name="description" content="网站描述，字数尽量空制在80个汉字，160个字符以内！">
</head>
<body>
<header class="navbar-wrapper">
	<div class="navbar navbar-black navbar-fixed-top">
		<div class="container cl">
			<a class="logo navbar-logo f-l mr-10 hidden-xs" href="/aboutHui.shtml">H-ui前端框架</a>
			<a class="logo navbar-logo-m f-l mr-10 visible-xs" href="/aboutHui.shtml">H-ui</a>
			<span class="logo navbar-slogan f-l mr-10 hidden-xs">简单 &middot; 免费 &middot; 适合中国网站</span>
			<a aria-hidden="false" class="nav-toggle Hui-iconfont visible-xs" href="javascript:;">&#xe667;</a>
			<nav class="nav navbar-nav nav-collapse" role="navigation" id="Hui-navbar">
				<ul class="cl">
					<li class="current"><a href="/">dog2</a></li>
					<li><a href="/tinylara/public/">dog3</a></li>
					<li><a href="#">dog4</a></li>
					<li class="dropDown dropDown_hover"><a href="#" class="dropDown_A">一级导航 <i class="Hui-iconfont">&#xe6d5;</i></a>
						<ul class="dropDown-menu menu radius box-shadow">
							<li><a href="#">二级导航</a></li>
							<li><a href="#">二级导航<i class="arrow Hui-iconfont">&#xe6d7;</i></a>
								<ul class="menu">
									<li><a href="javascript:;">三级菜单<i class="arrow Hui-iconfont">&#xe6d7;</i></a>
										<ul class="menu">
											<li><a href="javascript:;">四级菜单</a></li>
											<li><a href="javascript:;">四级菜单</a></li>
											<li><a href="javascript:;">四级菜单</a></li>
										</ul>
									</li>
									<li><a href="#">三级导航</a></li>
								</ul>
							</li>
							<li><a href="#">二级导航</a></li>
							<li class="disabled"><a href="javascript:;">二级菜单</a></li>
						</ul>
					</li>
					<li><a href="#">联系我们</a></li>
				</ul>
			</nav>
			<nav class="navbar-userbar hidden-xs">
				
			</nav>
		</div>
	</div>
</header>
<nav class="breadcrumb">
	<div class="container">
		<i class="Hui-iconfont">&#xe67f;</i> <a href="/" class="c-primary">首页</a><span class="c-gray en">&gt;</span><a href="#">组件</a><span class="c-gray en">&gt;</span><span class="c-gray">当前页面</span>
	</div>
</nav>
<section class="container">
	<h1>Hi,H-ui!</h1>
	<p>开始前端之旅！</p>
	<h2>表单</h2>
	<div class="line"></div>
	<form action="" method="post" class="form form-horizontal responsive" id="demoform">
		<div class="row cl">
			<label class="form-label col-xs-2">邮箱：</label>
			<div class="formControls col-xs-5">
				<input type="text" class="input-text" placeholder="@" name="email" id="email" datatype="e" nullmsg="请输入邮箱！">
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">用户名：</label>
			<div class="formControls col-xs-5">
				<input type="text" class="input-text" placeholder="4~16个字符，字母/中文/数字/下划线" name="username" id="username" datatype="*4-16" nullmsg="用户名不能为空">
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">账户：</label>
			<div class="formControls col-xs-5">
				<input type="text" class="input-text" autocomplete="off" placeholder="手机/邮箱" name="username" id="username" datatype="m|e" nullmsg="账户不能为空">
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">密码：</label>
			<div class="formControls col-xs-5">
				<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password" id="password" datatype="*6-18" nullmsg="请输入密码！" >
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">密码验证：</label>
			<div class="formControls col-xs-5">
				<input type="password" class="input-text" autocomplete="off" placeholder="密码" name="password2" id="password2" recheck="password" datatype="*6-18" nullmsg="请再输入一次密码！" errormsg="您两次输入的密码不一致！" >
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">单选框：</label>
			<div class="formControls skin-minimal col-xs-5">
				<div class="radio-box">
					<input type="radio" id="sex-1" name="sex" datatype="*" nullmsg="请选择性别！">
					<label for="sex-1">男</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-2" name="sex">
					<label for="sex-2">女</label>
				</div>
				<div class="radio-box">
					<input type="radio" id="sex-3" name="sex">
					<label for="sex-3">保密</label>
				</div>
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">爱好：</label>
			<div class="formControls skin-minimal col-xs-5">
				<div class="check-box">
					<input type="checkbox" id="checkbox-5" name="checkbox2" datatype="*" nullmsg="爱好不能为空！">
					<label for="checkbox-5">上网</label>
				</div>
				<div class="check-box">
					<input type="checkbox" id="checkbox-6" name="checkbox2">
					<label for="checkbox-6">摄影</label>
				</div>
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">附件：</label>
			<div class="formControls col-xs-5"> <span class="btn-upload form-group">
				<input class="input-text upload-url" type="text" name="uploadfile-2" id="uploadfile-2" readonly  datatype="*" nullmsg="请添加附件！" style="width:200px">
				<a href="javascript:void();" class="btn btn-primary upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
				<input type="file" multiple name="file-2" class="input-file">
				</span> </div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">所在城市：</label>
			<div class="formControls col-xs-5"> <span class="select-box">
				<select class="select" size="1" name="demo1" datatype="*" nullmsg="请选择所在城市！">
					<option value="" selected>请选择城市</option>
					<option value="1">北京</option>
					<option value="2">上海</option>
					<option value="3">广州</option>
				</select>
				</span> </div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">网址：</label>
			<div class="formControls col-xs-5">
				<input type="text" class="input-text" placeholder="http://" name="username" id="username" datatype="url" nullmsg="网址不能为空">
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<label class="form-label col-xs-2">备注：</label>
			<div class="formControls col-xs-5">
				<textarea name="" cols="" rows="" class="textarea"  placeholder="说点什么...最少输入10个字符" datatype="*10-500" nullmsg="备注不能为空！" onKeyUp="textarealength(this,500)"></textarea>
				<p class="textarea-numberbar"><em class="textarea-length">0</em>/500</p>
			</div>
			<div class="col-xs-5"> </div>
		</div>
		<div class="row cl">
			<div class="col-xs-10 col-xs-offset-2">
				<input class="btn btn-primary" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
			</div>
		</div>
	</form>
	<h2>按钮</h2>
	<div class="line"></div>
	<table class="table table-border table-bordered table-striped mt-20">
		<thead>
			<tr>
				<th class="col1">button</th>
				<th class="col2">input</th>
				<th class="col3">a</th>
				<th class="col4">disabled状态</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><button class="btn btn-default radius" type="button">默认</button></td>
				<td><input class="btn btn-default radius" type="button" value="默认"></td>
				<td><a href="#" class="btn btn-default radius">默认</a></td>
				<td><input class="btn btn-default radius disabled" type="button" value="不可点击"></td>
			</tr>
			<tr>
				<td><button class="btn btn-primary radius" type="button">主要</button></td>
				<td><input class="btn btn-primary radius" type="button" value="主要"></td>
				<td><a href="#" class="btn btn-primary radius">主要</a></td>
				<td><input class="btn btn-primary radius disabled" type="button" value="不可点击"></td>
			</tr>
			<tr>
				<td><button class="btn btn-secondary radius" type="button">次要</button></td>
				<td><input class="btn btn-secondary radius" type="button" value="次要"></td>
				<td><a href="#" class="btn btn-secondary radius">次要</a></td>
				<td><input class="btn btn-secondary radius disabled" type="button" value="不可点击"></td>
			</tr>
			<tr>
				<td><button class="btn btn-success radius" type="button">成功</button></td>
				<td><input class="btn btn-success radius" type="button" value="成功"></td>
				<td><a href="#" class="btn btn-success radius">成功</a></td>
				<td><input class="btn btn-success radius disabled" type="button" value="不可点击"></td>
			</tr>
			<tr>
				<td><button class="btn btn-warning radius" type="button">警告</button></td>
				<td><input class="btn btn-warning radius" type="button" value="警告"></td>
				<td><a href="#" class="btn btn-warning radius">警告</a></td>
				<td><input class="btn btn-warning radius disabled" type="button" value="不可点击"></td>
			</tr>
			<tr>
				<td><button class="btn btn-danger radius" type="button">危险</button></td>
				<td><input class="btn btn-danger radius" type="button" value="危险"></td>
				<td><a href="#" class="btn btn-danger radius">危险</a></td>
				<td><input class="btn btn-danger radius disabled" type="button" value="不可点击"></td>
			</tr>
			<tr>
				<td><button class="btn btn-link radius" type="button">链接</button></td>
				<td><input class="btn btn-link radius" type="button" value="链接"></td>
				<td><a href="#" class="btn btn-link radius">链接</a></td>
				<td><input class="btn btn-link radius disabled" type="button" value="不可点击"></td>
			</tr>
		</tbody>
	</table>
	</p>
	<h2>表格</h2>
	<div class="line"></div>
	<table class="table table-border table-bordered table-striped mt-20">
		<thead>
			<tr>
				<th class="col1">表头</th>
				<th class="col2">表头</th>
				<th class="col3">表头</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th class="col1">类别</th>
				<td class="col2">表格内容</td>
				<td class="col3">表格内容</td>
			</tr>
			<tr>
				<th class="col1">类别</th>
				<td class="col2">表格内容</td>
				<td class="col3">表格内容</td>
			</tr>
			<tr>
				<th class="col1">类别</th>
				<td class="col2">表格内容</td>
				<td class="col3">表格内容</td>
			</tr>
		</tbody>
	</table>
</section>
<footer class="footer mt-20">
	<div class="container">
		<nav class="footer-nav">
			<a target="_blank" href="/aboutHui.shtml">关于H-ui</a>
			<span class="pipe">|</span>
			<a target="_blank" href="/copyright.shtml">软件著作权</a>
			<span class="pipe">|</span>
			<a target="_blank" href="/juanzeng.shtml">感谢捐赠</a>
		</nav>
		<p>Copyright &copy;2013-2016 H-ui.net All Rights Reserved. <br>
		<a rel="nofollow" target="_blank" href="http://www.miitbeian.gov.cn/">京ICP备15015336号-1</a><br>
		未经允许，禁止转载、抄袭、镜像<br>
		用心做站，做不一样的站</p>
	</div>
</footer>

<script type="text/javascript" src="assets/lib/jquery/1.9.1/jquery.min.js"></script> 
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
</script>
</body>
</html>
<!--H-ui前端框架提供前端技术支持 h-ui.net @2015-8-4 -->
<?php }
}
