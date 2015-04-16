<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:05 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="骑士CMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type="text/javascript" language="javascript"></script>
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".audit_email").click(function(){
		dialog("邮箱验证","url:personal_ajax.php?act=user_email","500px","auto","","");
	});
	$(".audit_mobile").click(function(){
		dialog("手机验证","url:personal_ajax.php?act=user_mobile","500px","auto","","");
	});
	$(".edit_mobile").click(function(){
		dialog("身份验证","url:personal_ajax.php?act=old_mobile","500px","auto","","");
	});
});
</script>
</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">当前位置：<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">首页</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">会员中心</a> > 安全认证</div>

<div class="usermain">
  <div class="leftmenu link_bk">
   <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("member_personal/left.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>	
  </div>
<div class="rightmain">
  
	<div class="bbox1">
	
	<div class="authenticate link_bk">
			
 	    	<div class="topnav">
			  
			<div class="titleH1">
				<div class="h1-title">账户管理</div>
			</div>
					
			<div class="navs link_bk">
				<a href="?act=userprofile">基本资料</a>
				  <a href="?act=password_edit">密码修改</a>
				  <a href="?act=authenticate" class="se">安全认证</a>
				  <a href="?act=avatars">头像</a>
				  <a href="?act=pm">消息<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log">登陆日志</a>
				   <a href="?act=binding">账号绑定</a>
				  <div class="clear"></div>
			</div>
	  	</div>

	  	<div class="main">
	  		<p class="toptipp">温馨提示：认证通过后，您的简历真实度会进一步提升，用人单位更信赖认证过的简历。</p>
	  		<div class="mail_authenticate">
	  			<div class="mail_img  <?php if ($this->_vars['user']['email_audit'] == '1'): ?>certified<?php else: ?>not_certified<?php endif; ?>"></div>
	  			<div class="mail_content">
	  				<h4>邮箱认证</h4>
	  				<p class="warning">互联网账号存在被盗风险，建议您更改邮箱后验证以保证账号安全。</p>
	  				<?php if ($this->_vars['user']): ?>
	  				<p>您的邮箱：<?php echo $this->_vars['user']['email']; ?>
 <?php if ($this->_vars['user']['email_audit'] == "1"): ?><span>已认证</span><?php else: ?><span class="no_authenticate">未认证</span><?php endif; ?></p>
	  				<?php endif; ?>
	  			</div>
	  			<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
	  			<input type="button" value="修改邮箱" class="but130lan audit_email" />
	  			<?php else: ?>
	  			<input type="button" value="立即认证" class="but130lan audit_email" />
	  			<?php endif; ?>
	  			
	  			<div class="clear"></div>
	  		</div>
	  		<!-- 邮箱验证弹出框 start-->

	  		<!-- 邮箱验证弹出框 end -->
	  		<?php if ($this->_vars['sms']['open'] == "1"): ?>
	  		<div class="phone_authenticate">
	  			<div class="phone_img <?php if ($this->_vars['user']['mobile_audit'] == '1'): ?>certified<?php else: ?>not_certified<?php endif; ?>"></div>
	  			<div class="phone_content">
	  				<h4>手机认证</h4>
	  				<p class="warning">互联网账号存在被盗风险，建议您更换手机号码后验证以保证账号安全。</p>
	  				<?php if ($this->_vars['user']): ?>
	  				<p>您的号码：<?php echo $this->_vars['user']['mobile']; ?>
 <?php if ($this->_vars['user']['mobile_audit'] == "1"): ?><span>已认证</span><?php else: ?><span class="no_authenticate">未认证</span><?php endif; ?></p>
	  				<?php endif; ?>
	  			</div>
	  			<?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
	  			<input type="button" value="修改手机" class="but130lan edit_mobile" />
	  			<?php else: ?>
	  			<input type="button" value="立即认证" class="but130lan audit_mobile" />
	  			<?php endif; ?>
	  			<div class="clear"></div>
	  		</div>
			<?php endif; ?>
			  <div class="bottomtip">
		 	   <div class="tp h2-title">小贴士</div>
		 	   <?php if ($this->_vars['sms']['open'] == "1"): ?>
			   邮箱/手机通过认证后，可以用邮箱/手机号码直接作为用户名登录。<br />
				邮箱/手机通过认证后，如果忘记密码，可以用邮箱/手机找回。<br />
				邮箱/手机通过认证后，当企业发出面试邀请时，您可及时收到邮件/短信提醒。
				<?php else: ?>
				邮箱通过认证后，可以用邮箱直接作为用户名登录。<br />
				邮箱通过认证后，如果忘记密码，可以用邮箱找回。<br />
				邮箱通过认证后，当企业发出面试邀请时，您可及时收到邮件提醒。
				<?php endif; ?>
			 </div>
			 
	  		 
	  	</div>
	</div>
	</div>
  </div>
	</div>
</div>

<div class="clear"></div>
</div>

<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>