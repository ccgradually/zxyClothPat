<?php /* Smarty version Smarty-3.1.6, created on 2016-12-31 23:43:33
         compiled from "E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\Common\header.html" */ ?>
<?php /*%%SmartyHeaderCode:970586517da2fb341-61452061%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf9e1e349c886b651a031caa10caa41b47bbb351' => 
    array (
      0 => 'E:/apacheRoot/zxyClothesPlatform/zxy1.02/ZxyClothPat/Home/View\\Common\\header.html',
      1 => 1483199005,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '970586517da2fb341-61452061',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.6',
  'unifunc' => 'content_586517daa0a6f',
  'variables' => 
  array (
    'title' => 0,
    'index' => 0,
    'user_name' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_586517daa0a6f')) {function content_586517daa0a6f($_smarty_tpl) {?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta >
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
-设计师平台</title>
	<style type="text/css">
		body{
		margin: 0px auto ;
		min-width: 1180px;
		width: 100%;
		font-family: "arial";
		font-size: 16px;
		text-align: center;
		cursor:default;
		}

		/*****************************************************************************************
		 * 第一层-top
		 * 包含3个部分：log，标语，未登录栏（已登录栏）
		 * 未登录栏包含两个部分：登录注册按钮
		 * 已登录栏包含3个部分：用户的昵称，下拉的按钮，会员等级
		 */
		.top{
			width: 100%;
			height:45px;		
			border-bottom:1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
		.top .logo{
			float: left;
			width: 200px;
			height: 40px;
			background: url('<?php echo @IMAGE_URL;?>
logo1.jpg');
		}
		/*标语*/
		.top .slogans{
		}
		.top .unlogin_status,.logined_status{
			font-family:"Verdana", "微软雅黑";	
			font-size: 14px;
			float: right;
			height: 45px;
			width: 200px;
		}
		.top .unlogin_status .login_button{
			line-height: 45px;
			float: left;
		}
		.top .logined_status .login_username{
			line-height: 45px;
			float: left;
			display: block;
			color: #fe008d;
			/*cursor:pointer;*/
		}
		.top .logined_status .login_username a{
			color: #fe008d;
			text-decoration: none;
		}
		/*下拉按钮*/
		.top .logined_status .dropmeun_button{
			position: relative;
			margin-top: 20px;
			height: 9px;
			width: 15px;
			float:left;
			display: block;
			margin-left: 10px;
			background: url(<?php echo @IMAGE_URL;?>
drop.png);
		}

		/******************************************************************************************
		 * 隐藏层-下拉框：用户中心
		 */
		.dropmeun_button .user_center{
			position: absolute;
			bottom: -245px;
			right: -100px;
			height: 240px;
			border: 1px solid black;
			border-bottom-right-radius: 15px; 
			border-bottom-left-radius: 15px; 
			width: 300px;
			background: #fff;
			z-index: 12000;
			border: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			display: none;
		}
		.user_center .user_bar{
			height: 180px;
			width: 300px;
			border-bottom: 1px solid rgba(204, 204, 204, 0.7);
		}
		.user_bar .user_avatar{
			height: 100px;
			width: 100px;
			margin-top: 20px;
			margin-left: 100px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			border-radius: 50px;
			background: #eee;
		}
		.user_bar:hover > .user_avatar{
			border: 2px solid rgba(238, 0,143,1);
		}

		.user_bar .user_cross_line{
			margin-left: 50px;
			margin-top: 10px;
			width: 200px;
			border-top:1px solid rgba(204, 204, 204, 0.7); 
		}
		.user_bar .user_tag1, .user_tag2{
		    width: 200px;
		    margin-left: 50px;
		    margin-top:10px;  
		}
		.user_bar a{
			text-decoration: none;
			margin: 15px;
			color: #555;
		}
		.user_bar a:hover{
			color:#FE008D;
		}
		.user_center .user_logout{
			margin-left: 230px;
			margin-top: 8px;
		}
		.user_center .user_logout a{
			text-decoration: none;
			color: #555;
		}
		.user_center .user_logout a:hover{
			color: #FE008D;
		}
		.top .logined_status .login_userdegree{
			line-height: 45px;
			float: left;
			margin-left: 10px;
			display: block;
			color: #d9d09b;
		}
		.login_button a,.register_button a{
			opacity:0.6;
			filter:alpha(opacity=60);
			color: #4d3126;
			display: inline-block;
			text-decoration: none;
		}
		.top .unlogin_status .register_button{
			padding:0 20px;
			line-height: 45px;
			float: left;
		}
		/***************************************************************************************
		 * 第二层-背景层
		 * 页面变换时背景跟着变换，更好页面皮肤，装饰作用
		 */
		.activities{
			width: 100%;
			height: 255px;
			background: #eee;
			border-bottom: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
		}
		.activities ul{
			margin: 0px;
			list-style: none;
			height: 255px;
			width: 1180px;
		}
		.activities ul li{
			text-decoration: none;
		}
		.activities ul li {
			bottom: 0; left: 0;
			position: absolute;
			height: 255px;
			width: 1180px;
		}

		/**************************************************************************************
		 * 第三层-一级导航层
		 * 包含2个部分：左边的页面主标签，右边的7个导航标签
		 */
		.wrapper{
			height: 50px;
			width: 100%;
			border-bottom: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			background: #eee;
		}
		.wrapper .nav{
			margin: 0 auto;
			height: 50px;
			width: 1180px;
			border-bottom: 1px solid rgba(204, 204, 204, 0.7);
			box-shadow: 2px 2px 15px rgba(204, 204, 204, 0.35);
			background: #eee;
		}
		.wrapper .nav .page_tag{
			font-family: "微软雅黑";
			font-size: 16px;
			float: left;
			width: 250px;
			height: 50px;
			line-height: 50px	
		}
		.wrapper .nav .tag_list{
			float: left;
			width: 927px;
			height: 50px;
			background: #eee;
		}
		.wrapper .nav .tag_list ul{
			list-style: none;
		}
		.wrapper .nav .tag_list ul li{
			float: left;
			opacity:0.6;
			filter:alpha(opacity=60);		
		}
		.wrapper .nav .tag_list ul li a{
			font-family: "Verdana", "微软雅黑",Geneva, Tahoma, sans-serif;
			text-decoration: none;
			color: #000;
			display: block;
			padding: 0px 30px;
			
			
		}

		/****************************************************************************************		 
		 * 隐藏层2-登录注册弹窗
		 * 
		 */
		#mask{
		    background: #000;
		    opacity: 0.75;
		    filter: alpha(opacity=75);
		    height: 1000px;
		    width: 100%;
		    position: absolute;
		    left: 0;
		    top:0;
		    z-index: 1000;
		    }
		#loginCon,#registerCon{
			position: absolute;
			position: fixed;
			width: 670px;	  
		    background-color: #fff;
		    display: none;
		    z-index: 1008;
		    }
	    #loginCon{
		    height:350px;   
		}
		#registerCon{
		    height:400px; 	    
		}	
		#loginCon_close,#registerCon_close{
			position: absolute;
			height: 60px;
			width: 60px;
			top: 0px;
			right: 0px;
			background: url('<?php echo @IMAGE_URL;?>
fancy_close.png');
		}
		.login_content{
			width: 330px;
			height: 350px;
			float: left;
			/*border: 1px solid black;	*/
		}
		.register_content{
			width: 330px;
			height: 400px;
			float: left;
		}
		.login_title,.register_title{
			font-family: "Verdana", "微软雅黑",Geneva, Tahoma, sans-serif;
			font-size: 24px;
			margin-left: 40px; 
			text-align: left; 
			margin-top:52px;
			margin-bottom: 20px;
			/*margin-left: 50px; */

		}
		form{
			margin-left: 40px;
			text-align: left; 
			/*opacity: 0.5;*/
		}
		form .txt{
			font-family:arial;
			font-size: 13px; 
			margin-top: 12px;
			height: 30px;
			width: 230px;
			border: 1px solid rgba(204, 204, 204, 0.7);	
		}
		.txt:hover{
			 border: 1px solid rgba(100, 100, 100, 0.7);
		}
		input:hover{
			color: #fe008d;
		}
		.captcha{
			margin-top: 12px;
			height: 40px;
			width: 250px;
		}
		.captcha .captcha_txt{
			float: left;
			font-size: 13px; 
			height: 30px;
			width: 70px;
			border: 1px solid rgba(204, 204, 204, 0.7);
		}
		.captcha_txt:hover{
			 border: 1px solid rgba(100, 100, 100, 0.7);
		}
		.captcha img{
			margin-left: 5px;
			float: left;
					}
		.captcha .reflash{
			margin-top: 13px;
			font-size: 12px; 
			font-family:"微软雅黑";
			color: #03a9f4; 
			float: right;
			height: 30px;
			width: 70px;
			opacity: 0.5;
			cursor:pointer;
		}
		.reflash:hover{
			opacity: 1;
		}
		.login_content form .forget_passwd{
			margin-top: 20px;
			height: 30px;
		}
		.login_content form .forget_passwd a{
			text-decoration: none;
			color: #4d3126;	
		}
		.forget_passwd a:hover{
			color: #FE008D;
		}
		.login_content form .login_btn{
			font-family: "微软雅黑";
			position: absolute;
			left: 210px;
			bottom: 78px;
			height: 30px;
			width: 60px;
			background: 000px;
			border-radius: 6px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			cursor:pointer;
		}
		.login_btn:hover{
			color: #FE008D;
		}
		.register_content form .register_btn{
			font-family: "微软雅黑";
			position: absolute;
			left: 100px;
			bottom: 55px;
			height: 30px;
			width: 80px;
			background: 000px;
			border-radius: 6px;
			border: 1px solid rgba(204, 204, 204, 0.7);
			cursor:pointer;
		}
		.register_btn:hover{
			color: #FE008D;
		}
		.devide_line{
			position: absolute;
			left: 332px;
			top: 66px;
			height: 230px;
			width: 10px;
			background: url('<?php echo @IMAGE_URL;?>
devide_line.png');
		}
		.vip_introduce{
			width: 320px;
			height: 380px;
			float: right;
			/*border:1px solid black;*/
		}
		.vip_introduce p{
			text-align: left;
			margin-top: 100px;
			margin-left:26px;
			text-decoration: underline;
			color: #4d3126;
		}
		.vip_introduce ul{
			margin-left:5px;
			margin-top: 34px;
		}
		.vip_introduce ul li{
			text-align: left;
			list-style: none;
			line-height: 22px;
			font-family:"arial";
			opacity: 0.5;
		    filter: alpha(opacity=50);
		}
		.vip_introduce #turn_register{
			font-size: 20px;
			text-align: left;
			margin-left: 26px;
			margin-top: 30px;
			font-family: "微软雅黑";
			color: #03a9f4;
			opacity: 0.5;
			cursor:pointer;
		}
		#turn_register:hover{
			opacity: 1;
		}
		#turn_login{
			font-size: 20px;
			margin-left: 5px;
			font-family: "微软雅黑";
			color: #03a9f4;
			opacity: 0.5;
			cursor:pointer;
		}
		#turn_login:hover{
			opacity: 1;
		}
		.register_term {
			margin-top: 1px;
		}
		.txt_term,.vip_register{
			font-size: 13px;
			opacity: 0.75;
		    filter: alpha(opacity=75);
		}	
		.vip_register{
			margin-top: 200px;
			text-align: left;
			margin-left: 20px;
		}	   
	</style>
	<script type="text/javascript">
		window.onload = function(){
			/****************************************************************************
			 *1.登录注册下划线
			 *  移入登录注册按钮时添加下划线
			 *  移出时消失
			 */ 
			var oLogin_button = document.getElementById("login_button");
			var oRegister_button = document.getElementById("register_button");
			oLogin_button.onmouseover = function(){
				this.children[0].style.textDecoration = "underline";
			}
			oLogin_button.onmouseout = function(){
				this.children[0].style.textDecoration = "none";
			}
			oRegister_button.onmouseover = function(){
				this.children[0].style.textDecoration = "underline";				
		 	}
		 	oRegister_button.onmouseout = function(){
				this.children[0].style.textDecoration = "none";				
		 	}

		 	/****************************************************************************
		 	 *2.登录注册弹窗
		 	 *  点击登录按钮，登录弹窗出现，
		 	 *  弹窗显示在可视区域的中央位置
		 	 *  遮罩遮蔽其他部位
		 	 *  点击弹窗上的关闭按钮或者点击弹窗外的位置弹窗消失
		 	 */
			var oLogin = document.getElementById("loginCon");			
			var oLogin_close=document.getElementById("loginCon_close");
			var oRegister = document.getElementById("registerCon");
	        var oRegister_close=document.getElementById("registerCon_close");
	        var sHeight = document.documentElement.scrollHeight;
			var sWidth = document.documentElement.scrollWidth;
			var wHeight = document.documentElement.clientHeight;
			var wWidth = document.documentElement.clientWidth;
	        var oMask=document.createElement("div");
	        oMask.id = "mask";
			oMask.style.height = sHeight+"px";
			oMask.style.width = sWidth+"px";
			oLogin_button.onclick = function(){
				popup(oLogin,oLogin_close);        		
	     	} 
	        oRegister_button.onclick = function(){      	
	        	popup(oRegister,oRegister_close); 
	        }

	        /****************************************************************************
		 	 *3.切换登录注册框
		 	 *  点击登录框中注册，登录框消失，弹出注册窗口
		 	 *  点击注册框中登录，注册框消失，弹出登录窗口
		 	 */
		 	var oTurn_register = document.getElementById("turn_register");
		 	var oTurn_login = document.getElementById("turn_login");
		 	oTurn_register.onclick = function(){
		 		document.body.removeChild(oMask);
		 		oLogin.style.display= "none";
				popup(oRegister,oRegister_close);    
		 	}
		 	oTurn_login.onclick = function(){
		 		document.body.removeChild(oMask);
		 		oRegister.style.display= "none";
				popup(oLogin,oLogin_close);    
		 	}
	        // 弹窗方法    
	     	function popup(obj,oClose){
				document.body.appendChild(oMask);
				obj.style.display = "inline";
				var dHeight = obj.offsetHeight;
				var dWidth = obj.offsetWidth;
				obj.style.left = (sWidth-dWidth)/2+"px";
				obj.style.top = (wHeight-dHeight)/2+"px";
				oMask.onclick = oClose.onclick = function(){
					document.body.removeChild(oMask);
					obj.style.display="none";           
				}
	     	}
	     	
	     	/****************************************************************************
		 	 *4.刷新验证码（登录，注册）
		 	 *  点击换一张，页面不刷新而验证码刷新 
		 	 */
		 	var oReflash = document.getElementById("reflash1");
		 	var oCaptcha_img = document.getElementById("captcha_img1");
		 	oReflash.onclick = function(){
		 		oCaptcha_img.src = "<?php echo @__MODULE__;?>
/User/verify?q="+new Date().getTime();
		 	}
		 	var oReflash2 = document.getElementById("reflash2");
		 	var oCaptcha_img2 = document.getElementById("captcha_img2");
		 	oReflash2.onclick = function(){
		 		oCaptcha_img2.src = "<?php echo @__MODULE__;?>
/User/verify?q="+new Date().getTime();
		 	}
		 	
		 	/***************************************************************************
		 	 *5.轮播图（取消）
		 	 *  图片大小：满屏宽，255px高度
		 	 *  五张图片自动播放，鼠标移动到轮播图上时停止播放，移出重新开始
		 	 *  移到左右区域出现左右键，移出则左右键消失
		 	 *  点击左右键改变图片轮播方向
		 	 *  可以根据图片下方的按钮来选择当前显示的图片
		 	 */
		 	
		 	
		 	
		 	/*****************************************************************************
		 	 *6.一级导航选项卡动态显示
		 	 *  移入后透明度减少，字体颜色变深
		 	 *  移出后透明度增加，字体颜色变浅，恢复默认颜色
		 	 *  点击后成为活跃标签，颜色保持深度与其他标签区分
		 	 */
		 	var oNav_tag = document.getElementById("nav_tag");
		 	var aLi = oNav_tag.getElementsByTagName("li");
		 	var index =<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
;
		 	aLi[index].style.opacity = 1;
		 	// this.style.filter = 'alpha(opacity=100)';
		 	for(var i=0;i <aLi.length; i++){
		 		if(i!=index){
			 		aLi[i].onmouseover = function(){
			 			this.style.opacity = 1;
			 			// this.style.filter = "alpha(opacity=100)";
			 		}
					aLi[i].onmouseout = function(){
						this.style.opacity = 0.6;
						// this.style.filter = "alpha(opacity=60)";
			 		}
		 		}
		 	}

		 	/******************************************************************************
			 *7.个人中心显示
			 * 鼠标移动到用户名和下拉按钮时显示
			 * 移出时消失
			 * 同时移进去不消失，移出时消失	
			 */
			var timer = null;
			var oLogin_username = document.getElementById("login_username");
			var oDropmeun_button = document.getElementById("dropmeun_button");
			var oUser_center = document.getElementById("user_center");
			oLogin_username.onmouseover = oDropmeun_button.onmouseover = function(){
				oUser_center.style.display = "block";
				clearTimeout(timer);
			}
			oLogin_username.onmouseout = oDropmeun_button.onmouseout = function(){
				timer = setTimeout( function(){
					oUser_center.style.display = "none";
				},300 );
			}	

			/*******************************************************************************
			 *8.index页面二级导航栏
			 * 调用函数tabSwitch()	
			 */
			var oSubnav=document.getElementById('subnav');
		    new tabSwitch(oSubnav);

		    /*******************************************************************************
		     *9.index和showDesign页面轮播图（淡出淡入）
		     * 函数写在index和showDesign进行轮播
		     * 调用函数slidePlay()
		     */    	
		    


		}	
	</script>
	</head>
<body>
<!-- 第一层-top层 -->
<!-- 分为3个部分：logo，标语，未登录栏（未登录状态下显示）登录栏（登录状态下显示） -->
<!-- 当用户已经登录，显示登录栏，未登录显示，未登录栏 -->
<div class="top">
	<div class="logo">
	</div>
	<div class="slogans"></div>
	<!-- smarty判断：当用户未登录,session未存值时，显示未登录栏，反正显示登录栏 -->
	<?php if ($_smarty_tpl->tpl_vars['user_name']->value==''){?>
	<div class="unlogin_status" id="unlogin_status" style="display: block;">
		<div class="login_button" id="login_button"><a href="#">会员登录</a></div>
		<div class="register_button" id="register_button"><a href="#">免费注册</a></div>		
	</div>
	<div class="logined_status" id="login_status" style="display: none;">
	    <div class="login_username" id="login_username"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</div>
	    <div class="dropmeun_button" id="dropmeun_button">
	    	<div class="user_center" id="user_center">
	    		<div class="user_bar"></div>
	    		<div class="user_logout"><a href="<?php echo @__MODULE__;?>
/User/logout">退出</a></div>
	    	</div>	
	    </div>
		<div class="login_userdegree">初级设计师</div>	
	</div>
	<?php }else{ ?>
	<div class="unlogin_status" style="display: none;">
		<div class="login_button" id="login_button"><a href="#">会员登录</a></div>
		<div class="register_button" id="register_button"><a href="#">免费注册</a></div>		
	</div>
	<div class="logined_status" style="display: block;">
	    <div class="login_username" id="login_username"><a href="<?php echo @__MODULE__;?>
/User/userCenter"><?php echo $_smarty_tpl->tpl_vars['user_name']->value;?>
</a></div>
	    <div class="dropmeun_button" id="dropmeun_button">
	    <!-- 隐藏层-下拉用户中心框 -->
	    <!-- 包含1个头像，四个用户功能标签，分别指向4个页面 -->
	    	<div class="user_center" id="user_center">
	    		<div class="user_bar">
	    			<div class="user_avatar"></div>
	    			<div class="user_cross_line"></div>
    				<div class="user_tag1">
	    				<a href="<?php echo @__MODULE__;?>
/User/myDesign" title="设计作品">我的设计</a>
	    				<a href="<?php echo @__MODULE__;?>
/User/uploadDesign">上传作品</a>
	    			</div>
    				<div class="user_tag2">
	    				<a href="<?php echo @__MODULE__;?>
/User/myCircle" title="我的织衣圈">我的圈子</a>
	    				<a href="<?php echo @__MODULE__;?>
/User/userCenter">个人中心</a>
	    			</div>
	    		</div>
	    		<div class="user_logout"><a href="<?php echo @__MODULE__;?>
/User/logout">退出</a></div>
	    	</div>	
	    </div>
		<div class="login_userdegree">初级设计师</div>	
	</div>
	<?php }?>
</div>

<!-- 第二层-背景层 -->
<!-- 用大图渲染页面 -->
<div class="activities">
</div>

<!-- 第三层-一级导航层 -->
<!-- 分为2个部分：左边为此页面标签，右边是导航主页面的标签 -->
<div class="wrapper">
	<div class="nav">
		<div class="page_tag">服装分类</div>
		<div class="tag_list">
			<ul id="nav_tag">			
				<li><a href="<?php echo @__MODULE__;?>
/Index/index">首页</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/showDesign">全部作品</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/goodDesigner">设计达人</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/schoolDesign">美在校园</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/zhiyiCircle">织衣圈</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/zhiyiShop">织衣店</a></li>
				<li><a href="<?php echo @__MODULE__;?>
/Index/becomeDesigner" style="color:#e00">成为设计师</a></li>
			</ul>
		</div>
	</div>
</div>

<!-- 隐藏层1-登录框 -->
<!-- 分为3个部分，左边登录表单，中间隔离线，右边吸引会员，切换到注册的按钮 -->
<!-- 点击登录按钮时显示，一般情况隐藏 -->
<div class="loginCon" id="loginCon">
	<div id="loginCon_close"></div>
	<div class="login_content">
		<div class="login_title">织心米登录</div>
		<form action="<?php echo @__MODULE__;?>
/User/login" method="post">		
			<input type="txt"  class="txt" name="user_name" id="user_name" placeholder="用户名/邮箱/手机">
			<input type="password" class="txt" name="password" id="password" placeholder="密码">
			<div class="captcha">
				<input type="txt" class="captcha_txt" name="captcha" id="captcha" placeholder="验证码">
				<img id="captcha_img1" src="<?php echo @__MODULE__;?>
/User/verify"> 
				<div class="reflash" id="reflash1">换一张</div>
			</div>
			<div class="forget_passwd"><a href="<?php echo @__MODULE__;?>
/User/accountCenter">忘记密码？</a></div>
			<div><input type="submit" value="登录" class="login_btn" name="submit"></div>
		</form>
	</div>
	<div class="devide_line"></div>
	<div class="vip_introduce">
		<p> 加入会员？</p>
		<ul>
			<li>您可以收藏喜爱的设计</li>
			<li>还可以关注很牛的设计师</li>
			<li>在圈子里与他们交流</li>
			<li>甚至还可以自己成为设计师</li>
		</ul>
		<div id="turn_register">注册</div>
	</div>
</div>

<!-- 隐藏层-注册框 -->
<!-- 分为3个部分，左边注册表单，中间隔离线，切换到登录的按钮 -->
<!-- 点击注册按钮时显示，一般情况隐藏 -->
<div class="registerCon" id="registerCon">
	<div id="registerCon_close"></div>
	<div class="register_content">
		<div class="register_title">
			免费注册
		</div>
		<form action="" method="post">		
			<input type="txt"  class="txt" name="username" placeholder="用户名/邮箱/手机">
			<input type="password" class="txt" name="password" placeholder="密码">
			<input type="password" class="txt" name="password2" placeholder="确认密码">
			<div class="captcha">
				<input type="txt" class="captcha_txt" name="captcha" placeholder="验证码">
				<img id="captcha_img2" src="<?php echo @__MODULE__;?>
/User/verify"> 
				<div class="reflash" id="reflash2">换一张</div>
			</div>
			<input type="radio" name="register_term" class="register_term">
			<span class="txt_term">是否同意本网站注册条款</span>
			<div><input type="submit" value="立即注册" class="register_btn" name="submit"></div>
		</form>
	</div>
	<div class="devide_line"></div>
	<div class="vip_introduce">
		<div class="vip_register"> 已经有账号，请直接<span id="turn_login">登录</span></div>	
	</div>
</div>
</body>
<?php }} ?>