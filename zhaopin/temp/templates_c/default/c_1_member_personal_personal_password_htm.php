<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:01 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title><?php echo $this->_vars['title']; ?>
</title>
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
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
//��֤
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
    required: "�����������",
    minlength: jQuery.format("�����벻��С��{0}���ַ�"),
	maxlength: jQuery.format("�����벻�ܴ���{0}���ַ�")
   },
   password: {
    required: "������������",
    minlength: jQuery.format("�����벻��С��{0}���ַ�"),
	maxlength: jQuery.format("�����벻�ܴ���{0}���ַ�")
   },
   password1: {
    equalTo: "������������벻ͬ"
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
}, "�����벻���Ժ;�������ͬ");
});
</script>
</head>

<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> > �޸�����</div>

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
					  <div class="h1-title">�˻�����</div>
					</div>
					
			  <div class="navs link_bk">
				<a href="?act=userprofile">��������</a>
				  <a href="?act=password_edit" class="se">�����޸�</a>
				  <a href="?act=authenticate">��ȫ��֤</a>
				  <a href="?act=avatars">ͷ��</a>
				  <a href="?act=pm">��Ϣ<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log">��½��־</a>
				   <a href="?act=binding">�˺Ű�</a>
				  <div class="clear"></div>
			</div>
					
	  	</div>
		
			 
		<form id="Form1" name="Form1" method="post" action="?act=save_password" >	 
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="tableall" style="margin-top:15px;">
		  <tr>
			<td width="165" align="right"><span class="nec">������</span>��</td>
			<td width="264"><input name="oldpassword" type="password" class="input_text_200" id="oldpassword"/> </td>
			<td width="389">			</td>
		  </tr>
			<tr>
			<td width="165" align="right"><span class="nec">������</span>��</td>
			<td width="264"><input name="password" type="password" class="input_text_200" id="password" /> </td>
			<td>
			</td>
			</tr>
			<tr>
			<td width="165" align="right"><span class="nec">ȷ��������</span>��</td>
			<td width="264"><input name="password1" type="password" class="input_text_200" id="password1" /> </td>
			<td>
			</td>
			</tr>
		   <tr>
			<td align="right"> </td>
			<td colspan="2"><input type="submit" name="submitsave" id="submitsave" value="����"  class="but220lan"/>
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