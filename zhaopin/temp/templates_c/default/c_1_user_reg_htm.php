<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.qishi_url.php'); $this->register_modifier("qishi_url", "tpl_modifier_qishi_url",false);  require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.default.php'); $this->register_modifier("default", "tpl_modifier_default",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-16 13:45 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>注册</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/common.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/reg.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
//验证
$(document).ready(function() {
 $("#Form1").validate({
//debug: true,
// onsubmit:false,
//onfocusout :true,
submitHandler:function(form){
if($("#agreement").attr("checked")==false)
{
alert("您必须同意[注册协议]才能继续下一步");
return false;
}
		$("#reg").hide();
		$("#waiting").show();
		var tsTimeStamp= new Date().getTime();
		$.post("<?php echo $this->_vars['QISHI']['main_domain']; ?>
plus/ajax_user.php", { "username": $("#username").val(),"password": $("#password").val(),"member_type": $("#member_type").val(),"email":$("#email").val(),"postcaptcha": $("#postcaptcha").val(),"time":tsTimeStamp,"act":"do_reg"},
	 	function (data,textStatus)
	 	 {
			if (data=="err")
			{
			$("#waiting").hide();
			$("#reg").show();
			$("#username").attr("value","");
			$("#email").attr("value","");
			alert("注册失败");
			}
			else
			{
				$("body").append(data);
			}
	 	 })
//$(form).ajaxSubmit();
},
success: function(label) {
				label.text(" ").addClass("success");
			},
   rules:{
   username:{
    required: true,
	userName : true,
	nomobile : true,
	byteRangeLength : [3, 18],
	remote:{     
		url:"<?php echo $this->_vars['QISHI']['main_domain']; ?>
plus/ajax_user.php",     
		type:"post",    
		data:{"usname":function (){return $("#username").val()},"act":"check_usname","time":function (){return new Date().getTime()}}     
		}
   },
   email:{
    required: true,
	email:true,
	remote:{     
		url:"<?php echo $this->_vars['QISHI']['main_domain']; ?>
plus/ajax_user.php",     
		type:"post",    
		data:{"email":function (){return $("#email").val()},"act":"check_email","time": new Date().getTime()}     
		}
   },
   <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha:{
	IScaptchastr:true,
    required: true,
	remote:{     
	url:"<?php echo $this->_vars['QISHI']['main_domain']; ?>
include/imagecaptcha.php",     
	type:"post",    
	data:{"postcaptcha":function (){return $("#postcaptcha").val()},"act":"verify","time":function (){return new Date().getTime()}}     
	}
   },
   <?php endif; ?>
   password:{
    required: true,
	minlength:6,
    maxlength:18
   },
   password2:{
   required: true,
	 equalTo:"#password"
   }
	},
    messages: {
    username: {
    required: "请填写用户名",
	remote: jQuery.format("用户名已经存在或者不合法")	
   },
    email: {
    required: "请填写电子邮箱",
	email: jQuery.format("电子邮箱格式错误"),
	remote: jQuery.format("email已经存在")	
   },
    <?php if ($this->_vars['verify_userreg'] == "1"): ?>
    postcaptcha: {
    required: "请填写验证码",
	remote: jQuery.format("验证码错误")	
   },
    <?php endif; ?>
   password: {
    required: "请填写密码",
    minlength: jQuery.format("填写不能小于{0}个字符"),
	maxlength: jQuery.format("填写不能大于{0}个字符")
   },
   password2: {
   required: "请填写密码",
    equalTo: "两次输入的密码不同"
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent().next());
	}
    });
	 //中文字两个字节
	jQuery.validator.addMethod("byteRangeLength", function(value, element,	param) {
	var length = value.length;
	for (var i = 0; i < value.length; i++) {
			if (value.charCodeAt(i) > 127) {
			length++;
			}
		}
	return this.optional(element)	|| (length >= param[0] && length <= param[1]);
	}, "确保的值在3-18个字节之间");
	 //字符验证
	jQuery.validator.addMethod("userName", function(value, element) {
	return this.optional(element) || /^[\u0391-\uFFE5\w]+$/.test(value);
	}, "只能包含中英文、数字和下划线");
	jQuery.validator.addMethod("nomobile", function(value, element) { 
    var tel = /^(13|15|18)\d{9}$/;
	var $cstr= true;
	if (tel.test(value)) $cstr= false;
	return $cstr || this.optional(element); 
}, "用户名不能是手机号");
	jQuery.validator.addMethod("IScaptchastr", function(value, element) {
	var str="点击获取验证码";
	var flag=true;
	if (str==value)
	{
	flag=false;
	}
	return  flag || this.optional(element) ;
	}, "请填写验证码");
/////验证码部分
<?php if ($this->_vars['verify_userreg'] == "1"): ?>
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
		$(imgdiv).css({ position: "absolute",right: "-148px", "top": "0px" , "z-index": "10", "background-color": "#FFFFFF", "border": "1px #A3C8DC solid","display": "none","margin-left": "15px"});
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
			$(inputID).val("");
			$("#Form1").validate().element("#postcaptcha");	
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
$(".but-reg").hover(function(){$(this).addClass("but-reg-hover")},function(){$(this).removeClass("but-reg-hover")});
$(".but-reg-login").hover(function(){$(this).addClass("but-reg-login-hover")},function(){$(this).removeClass("but-reg-login-hover")});
//

});
</script>
</head>
<body class="login_body">
	<div class="sign_up_box">
		<div class="container">
			<div class="sign_lgo">
				<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
"><img src="<?php echo $this->_vars['QISHI']['upfiles_dir'];  echo $this->_vars['QISHI']['web_logo']; ?>
" alt="<?php echo $this->_vars['QISHI']['site_name']; ?>
" border="0" align="absmiddle" /></a>
				<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
" class="back-to-index"></a>
			</div>
			<div class="reg_type"><?php if ($_GET['type'] == "2" || $_GET['type'] == ""): ?>个人注册<?php elseif ($_GET['type'] == "1"): ?>企业注册<?php elseif ($_GET['type'] == "3"): ?>注册猎头会员<?php else: ?>注册培训会员<?php endif; ?></div>
			<div class="clear"></div>
			<div class="sign_centent">
				<!-- 注册表单 -->
				<div class="sign_left">
					<div class="sign_nav">
						<ul>
							<li><a href="?type=2" <?php if ($_GET['type'] == "2" || $_GET['type'] == ""): ?>class="select"<?php endif; ?>>个人注册</a></li>
							<li><a href="?type=1" <?php if ($_GET['type'] == "1"): ?>class="select"<?php endif; ?>>企业注册</a></li>
							<div class="clear"></div>
						</ul>
					</div>
					<form id="Form1" name="Form1" method="post" action="?sd">
					<div class="sign_form">
						<ul>
							<li>
								<div class="w99"><span>*</span>用户名：</div>
								<div class="input_box"><input type="text" name="username" id="username" class="sign_up_input_name" placeholder="请输入用户名" maxlength="25" /></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99"><span>*</span>密码：</div>
								<div class="input_box"><input type="password" name="password" id="password" class="sign_up_input_pwd" placeholder="请输入登录密码" maxlength="18" /></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99"><span>*</span>确认密码：</div>
								<div class="input_box"><input type="password" name="password2" id="password2" class="sign_up_input_pwd" placeholder="请确认登录密码" maxlength="18"/></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99"><span>*</span>电子邮箱：</div>
								<div class="input_box"><input type="text" name="email" id="email" class="sign_up_input_mail" placeholder="请输入您的常用邮箱" maxlength="60" /></div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<?php if ($this->_vars['verify_userreg'] == "1"): ?>
							<li>
								<div class="w99"><span>*</span>验证码：</div>
								<div class="input_box">
									<div id="imgdiv"></div>
									<input  class="sign_up_input_varcode" name="postcaptcha" id="postcaptcha" type="text" value="点击获取验证码" style="color:#999999"/>
								</div>
								<div class="item-tip"></div>
								<div class="clear"></div>
							</li>
							<?php endif; ?>
							<li>
								<div class="w99">&nbsp;</div>
								<div class="input_box user_agree"><input type="checkbox" name="agreement" id="agreement" value="1" checked="checked"/>我已阅读并同意<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
agreement/">《<?php echo $this->_vars['QISHI']['site_name']; ?>
用户服务协议》</a></div>
								<div class="clear"></div>
							</li>
							<li>
								<div class="w99">&nbsp;</div>
								<div class="input_box">
									<input name="member_type" type="hidden" id="member_type" value="<?php echo $this->_run_modifier($_GET['type'], 'default', 'plugin', 1, 2); ?>
" />
									<input type="submit" name="reg" id="reg" value="<?php if ($_GET['type'] == '3'): ?>注册猎头会员<?php elseif ($_GET['type'] == '4'): ?>注册培训会员<?php elseif ($_GET['type'] == '2' || $_GET['type'] == ''): ?>注册个人会员<?php else: ?>注册企业会员<?php endif; ?>" class="sign_up_but_sign" /></div>
							</li>
							<li>
								<div class="w99">&nbsp;</div>
								<div class="item-input-box waiting" id="waiting" style="display:none">
								正在注册中,请等待...
								</div>
							</li>
						</ul>
					</div>
					</form>
				</div>
				<!-- 注册表单 结束 -->

				<div class="sign_right">
					<div class="fast_login">
						<p class="title">已有<?php echo $this->_vars['QISHI']['site_name']; ?>
账号？</p>
						<div><input type="button" value="马上登陆" class="sign_up_but_login" onclick="window.location='<?php echo $this->_run_modifier("QS_login", 'qishi_url', 'plugin', 1); ?>
'"/></div>
						<?php if ($this->_vars['QISHI']['qq_apiopen'] == "1" || $this->_vars['QISHI']['sina_apiopen'] == "1" || $this->_vars['QISHI']['taobao_apiopen'] == "1"): ?>
						<div class="content_box">
							<p>使用合作网站账号登录：</p>
							
							<ul style="margin-bottom:40px;">
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
								<div class="clear"></div>
							</ul>
								<div class="clear"></div>
						</div>
						<?php endif; ?>
					</div>
					<div class="other_sign">
						<p>您是企业用户？<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/user_reg.php?type=1">注册<strong>企业会员</strong></a></p>
						<p>您是个人用户？<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
user/user_reg.php?type=2">注册<strong>个人会员</strong></a></p>
					</div>
				</div>
				<div class="clear"></div>
				
			</div>
		</div>
	</div>
</body>
</html>