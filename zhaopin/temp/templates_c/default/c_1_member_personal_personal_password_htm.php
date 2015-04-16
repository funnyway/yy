<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:01 ?D1ú±ê×?ê±?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
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
js/jquery.validate.min.js" type='text/javascript' language="javascript"></script>
<script type="text/javascript">
//验证
$(document).ready(function() {
 $("#Form1").validate({
 //debug: true,
// onsubmit:false,
//onfocusout :true,
   rules:{
   oldpassword:{
    required: true,
	minlength:6,
    maxlength:18
   },
   password:{
    required: true,
	minlength:6,
    maxlength:18,
	NOequalTo:"#oldpassword"
   },
   password1:{
	 equalTo:"#password"
   }
	},
    messages: {
    oldpassword: {
    required: "请输入旧密码",
    minlength: jQuery.format("旧密码不能小于{0}个字符"),
	maxlength: jQuery.format("旧密码不能大于{0}个字符")
   },
   password: {
    required: "请输入新密码",
    minlength: jQuery.format("新密码不能小于{0}个字符"),
	maxlength: jQuery.format("新密码不能大于{0}个字符")
   },
   password1: {
    equalTo: "两次输入的密码不同"
   }
  },
  errorPlacement: function(error, element) {
    if ( element.is(":radio") )
        error.appendTo( element.parent().next().next() );
    else if ( element.is(":checkbox") )
        error.appendTo ( element.next());
    else
        error.appendTo(element.parent());
	}
    });
	jQuery.validator.addMethod("NOequalTo", function(value, element,param) {
	var toval=$(param).val();
    return this.optional(element) || (toval!=value);
}, "新密码不可以和旧密码相同");
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
">会员中心</a> > 修改密码</div>

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
	
	  <div class="pwd link_bk">
			
 	    <div class="topnav">
			  
				 	<div class="titleH1">
					  <div class="h1-title">账户管理</div>
					</div>
					
			  <div class="navs link_bk">
				<a href="?act=userprofile">基本资料</a>
				  <a href="?act=password_edit" class="se">密码修改</a>
				  <a href="?act=authenticate">安全认证</a>
				  <a href="?act=avatars">头像</a>
				  <a href="?act=pm">消息<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log">登陆日志</a>
				   <a href="?act=binding">账号绑定</a>
				  <div class="clear"></div>
			</div>
					
	  	</div>
		
			 
		<form id="Form1" name="Form1" method="post" action="?act=save_password" >	 
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" style="margin-top:15px;">
		  <tr>
			<td width="165" align="right"><span class="nec">旧密码</span>：</td>
			<td width="264"><input name="oldpassword" type="password" class="input_text_200" id="oldpassword"/> </td>
			<td width="389">			</td>
		  </tr>
			<tr>
			<td width="165" align="right"><span class="nec">新密码</span>：</td>
			<td width="264"><input name="password" type="password" class="input_text_200" id="password" /> </td>
			<td>
			</td>
			</tr>
			<tr>
			<td width="165" align="right"><span class="nec">确认新密码</span>：</td>
			<td width="264"><input name="password1" type="password" class="input_text_200" id="password1" /> </td>
			<td>
			</td>
			</tr>
		   <tr>
			<td align="right"> </td>
			<td colspan="2"><input type="submit" name="submitsave" id="submitsave" value="保存"  class="but220lan"/>
			</td>
		  </tr>
		</table>
		</form>
		
			  
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
