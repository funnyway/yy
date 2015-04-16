<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\function.qishi_pageinfo.php'); $this->register_function("qishi_pageinfo", "tpl_function_qishi_pageinfo",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 13:45 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<?php echo tpl_function_qishi_pageinfo(array('set' => "列表名:page,调用:QS_login"), $this);?>
<title><?php echo $this->_vars['page']['title']; ?>
</title>
<meta name="description" content="<?php echo $this->_vars['page']['description']; ?>
">
<meta name="keywords" content="<?php echo $this->_vars['page']['keywords']; ?>
">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/login.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
//
$("#username").focus(function(){
	if ($("#username").val()=="用户名/邮箱/手机号")
	{
	$("#username").val('');
	$("#username").css("color","");
	}  
});
$("#passwordtxt").focus(function(){
	$("#passwordtxt").hide();
	$("#password").show();
	$('#password').trigger("focus");
});
//
$(".but-login").hover(function(){$(this).addClass("but-login-hover")},function(){$(this).removeClass("but-login-hover")});
//验证
$("form[id=Formlogin]").submit(function(e) {
e.preventDefault();
	if ($("#username").val()=="" || $("#username").val()=="用户名/邮箱/手机号")
	{			
		$(".login_err").html("请填写：用户名 / 邮箱 / 手机号");	
		$(".login_err").show();
	}
	else if($("#password").val()=="")
	{	
	$(".login_err").html("请填写密码！");
	$(".login_err").show();
	}
	<?php if ($this->_vars['verify_userlogin'] == "1"): ?>
	else if($("#postcaptcha").val()=="" || $("#postcaptcha").val()=="点击获取验证码")
	{	
	$(".login_err").html("请填写验证码！");
	$(".login_err").show();
	}
	<?php endif; ?>
	else
	{
		$("#reg").hide();
		$("#waiting").show();
		 if($("#expire").attr("checked")==true)
		 {
		 var expire=$("#expire").val();
		 }
		 else
		 {
		 var expire="";
		 }
		$.post("<?php echo $this->_vars['QISHI']['website_dir']; ?>
plus/ajax_user.php", {"username": $("#username").val(),"password": $("#password").val(),"expire":expire,"url":"<?php echo $_GET['url']; ?>
","postcaptcha":$("#postcaptcha").val(),"time": new Date().getTime(),"act":"do_login"},
	 	function (data,textStatus)
	 	 {
			if (data=="err" || data=="errcaptcha")
			{			
				$("#reg").show();
				$("#waiting").hide();
				$("#password").attr("value","");
				$(".login_err").show();	
				if (data=="err")
				{
				errinfo="帐号或者密码错误";
				}
				else if(data=="errcaptcha")
				{
				$("#imgdiv img").attr("src",$("#imgdiv img").attr("src")+"1");
				errinfo="验证码错误";
				}
				$(".login_err").html(errinfo);
			}
			else
			{
				$("body").append(data);
			}
	 	 })		
	}
	return false;
});
//
//验证码部分
<?php if ($this->_vars['verify_userlogin'] == "1"): ?>
function imgcaptcha(inputID,imgdiv)
{
	$(inputID).focus(function(){
		if ($(inputID).val()=="点击获取验证码")
		{
		$(inputID).val("");
		$(inputID).css("color","#333333");
		}
		$(inputID).parent("div").css("position","relative");
		//设置验证码DIV
		$(imgdiv).css({ position: "absolute", right: "-34px", "top": "68px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
		$(imgdiv).show();
		if ($(imgdiv).html()=='')
		{
		$(imgdiv).append("<img src=\"<?php echo $this->_vars['QISHI']['main_domain']; ?>
include/imagecaptcha.php?t=<?php echo $this->_vars['random']; ?>
\" id=\"getcode\" align=\"absmiddle\"  style=\"cursor:pointer; margin:3px;\" title=\"看不请验证码？点击更换一张\"  border=\"0\"/>");
		}
		$(imgdiv+" img").click(function()
		{
			$(imgdiv+" img").attr("src",$(imgdiv+" img").attr("src")+"1");
		});
		$(document).unbind().click(function(event)
		{
			var clickid=$(event.target).attr("id");
			if (clickid!="getcode" &&  clickid!="postcaptcha")
			{
			$(imgdiv).hide();
			$(inputID).parent("div").css("position","");
			$(document).unbind();
			}			
		});
	});
}
imgcaptcha("#postcaptcha","#imgdiv");
//验证码结束
<?php endif; ?>
//
});
<?php if ($this->_vars['QISHI']['weixin_apiopen'] == '1' && $this->_vars['QISHI']['weixin_scan_login'] == '1'): ?>
run();
function run(){
    $.get("<?php echo $this->_vars['QISHI']['website_dir']; ?>
wap/wap_login.php?act=waiting_weixin_login",function(data){
        if(data=="1"){
           window.location="<?php echo $this->_vars['QISHI']['website_dir']; ?>
";
        }else{
            run();
        }
    });
}
<?php endif; ?>
$(document).ready(function() {
	var aBtn = $(".login_main .top_box");
	var aDiv = $(".login_main .content_box");
	for (var i = 0; i < aBtn.length; i++) {
		aBtn[i].index = i ;
		aBtn[i].onclick = function () {
			for (var i = 0; i < aBtn.length; i++) {
				// aBtn[i].className = "";
				aDiv[i].style.display = "none";
			}
			// this.className = "whover";
			$(this).addClass('whover');
			$(this).siblings(aBtn).removeClass('whover');
			aDiv[this.index].style.display = "block" ;
			// alert( "!!!" );
		};
	}
});
</script>
</head>
<body class="login_body">
	<div class="login_box">
		<div class="container">
			
			<div class="logo"><a href="<?php echo $this->_vars['QISHI']['website_dir']; ?>
"><img src="<?php echo $this->_vars['QISHI']['upfiles_dir'];  echo $this->_vars['QISHI']['web_logo']; ?>
" alt="<?php echo $this->_vars['QISHI']['site_name']; ?>
" border="0" align="absmiddle" /></a></div>
			<div class="clear"></div>

			<div class="login_main">

				<div class="login_top">
					<div class="top_txt">
						<div class="top_txt_content" style="float:left">
							没有账号？
							<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/user_reg.php">立即注册</a>
						</div>
						<div class="top_box whover" style="float:left">账号登录</div>
						<?php if ($this->_vars['QISHI']['weixin_apiopen'] == '1' && $this->_vars['QISHI']['weixin_scan_login'] == '1'): ?>
						<div class="top_box" style="float:left;">微信登录</div>
						<?php endif; ?>
					</div>
					<div class="clear"></div>
				</div>

				<form id="Formlogin" name="Formlogin" method="post">
				<input type="hidden" name="url" id="url" value="<?php echo $this->_vars['url']; ?>
">
				<div class="login_content">
					<div class="img_box"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/46.jpg" alt="" /></div>

					
					<div class="content_box">
						<div class="login_err"></div>
						<div class="list">
							<input type="text" name="username" id="username" class="input_text_login_user" value="用户名/邮箱/手机号" maxlength="30" style="color:#999999;" />
							<input type="text" name="passwordtxt" id="passwordtxt" class="input_text_login_pwd" value="密码"  maxlength="30" style="color:#999999;"/>
							<input type="password" name="password" id="password" class="input_text_login_pwd" value=""  maxlength="30" style="display:none"/>
							<?php if ($this->_vars['verify_userlogin'] == "1"): ?>
							<div class="postcaptcha">
							<div id="imgdiv"></div>
							<input  class="txtinput" name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999;"/>
							</div>
							<?php endif; ?>
						</div>
						<div class="auto">
							<div><input type="checkbox" name="autologin" id="expire" name="expire" value="7" /><span>一周内自动登录</span></div>
							<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/user_getpass.php">忘记密码？</a>
							<div class="clear"></div>
						</div>
						<div class="input-box-waiting" id="waiting">
							正在登录中...
						</div>
						<div class="clear"></div>
						<div class="button"><input type="submit" name="submitlogin" id="login" value="立即登录" class="but_login_335" /></div>
						<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1" || $this->_vars['QISHI']['sina_apiopen'] == "1" || $this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
						<p>使用合作网站账号登录：</p>
						<ul>
							<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1"): ?>
							<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/<?php if ($this->_vars['QISHI']['qq_logintype'] == '1'): ?>connect_qq_client.php<?php else: ?>connect_qq_server.php<?php endif; ?>"class="qq">QQ</a></li>
							<?php endif; ?>
							<?php if ($this->_vars['QISHI']['sina_apiopen'] == "1"): ?>
							<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/connect_sina.php" class="weibo">weibo</a></li>
							<?php endif; ?>
							<?php if ($this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
							<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/connect_taobao.php" class="taobao">taobao</a></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>
					</div>
					<!-- 微信二维码登陆 -->
					<?php if ($this->_vars['QISHI']['weixin_apiopen'] == '1' && $this->_vars['QISHI']['weixin_scan_login'] == '1'): ?>
					<div class="content_box" style="display:none">
						<div style="height:214px;" class="weixinlogin">
							<div class="weixinlogin_box">
								<p class="weixin_p">安全登录 防止被盗</p>
								<div class="weinxinlogin_img">
									<?php echo $this->_vars['qrcode_img']; ?>

								</div>
								<p class="weixin_p">使用微信扫描上方二维码</p>
							</div>
						</div>
						<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1" || $this->_vars['QISHI']['sina_apiopen'] == "1" || $this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
						<p>使用合作网站账号登录：</p>
						<ul>
							<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1"): ?>
							<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/<?php if ($this->_vars['QISHI']['qq_logintype'] == '1'): ?>connect_qq_client.php<?php else: ?>connect_qq_server.php<?php endif; ?>"class="qq">QQ</a></li>
							<?php endif; ?>
							<?php if ($this->_vars['QISHI']['sina_apiopen'] == "1"): ?>
							<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/connect_sina.php" class="weibo">weibo</a></li>
							<?php endif; ?>
							<?php if ($this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
							<li><a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/connect_taobao.php" class="taobao">taobao</a></li>
							<?php endif; ?>
						</ul>
						<?php endif; ?>
					</div>
					<?php endif; ?>
					<div class="clear"></div>
				</div>
				</form>
			</div>
			<div class="copyright">
				<p><span><?php echo $this->_vars['QISHI']['site_name']; ?>
</span>   <span>Powered by <em>74cms v<?php echo $this->_vars['QISHI']['version']; ?>
</em></span>  <span>版权所有 ｜ 仿冒必究</span><span><?php echo $this->_vars['QISHI']['icp'];  echo $this->_vars['QISHI']['statistics']; ?>
</span></p>
				<p><span>联系地址：<?php echo $this->_vars['QISHI']['address']; ?>
 </span><span>联系电话：<?php echo $this->_vars['QISHI']['bootom_tel']; ?>
</span></p>
			</div>
		</div>
	</div>
</body>
</html>