<?php /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:05 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
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
js/jquery.dialog.js" type='text/javascript' ></script>
<script type="text/javascript">
$(document).ready(function(){
	$(".audit_email").click(function(){
		dialog("������֤","url:personal_ajax.php?act=user_email","500px","auto","","");
	});
	$(".audit_mobile").click(function(){
		dialog("�ֻ���֤","url:personal_ajax.php?act=user_mobile","500px","auto","","");
	});
	$(".edit_mobile").click(function(){
		dialog("�����֤","url:personal_ajax.php?act=old_mobile","500px","auto","","");
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

<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> > ��ȫ��֤</div>

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
				<div class="h1-title">�˻�����</div>
			</div>
					
			<div class="navs link_bk">
				<a href="?act=userprofile">��������</a>
				  <a href="?act=password_edit">�����޸�</a>
				  <a href="?act=authenticate" class="se">��ȫ��֤</a>
				  <a href="?act=avatars">ͷ��</a>
				  <a href="?act=pm">��Ϣ<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log">��½��־</a>
				   <a href="?act=binding">�˺Ű�</a>
				  <div class="clear"></div>
			</div>
	  	</div>

	  	<div class="main">
	  		<p class="toptipp">��ܰ��ʾ����֤ͨ�������ļ�����ʵ�Ȼ��һ�����������˵�λ��������֤���ļ�����</p>
	  		<div class="mail_authenticate">
	  			<div class="mail_img  <?php if ($this->_vars['user']['email_audit'] == '1'): ?>certified<?php else: ?>not_certified<?php endif; ?>"></div>
	  			<div class="mail_content">
	  				<h4>������֤</h4>
	  				<p class="warning">�������˺Ŵ��ڱ������գ������������������֤�Ա�֤�˺Ű�ȫ��</p>
	  				<?php if ($this->_vars['user']): ?>
	  				<p>�������䣺<?php echo $this->_vars['user']['email']; ?>
 <?php if ($this->_vars['user']['email_audit'] == "1"): ?><span>����֤</span><?php else: ?><span class="no_authenticate">δ��֤</span><?php endif; ?></p>
	  				<?php endif; ?>
	  			</div>
	  			<?php if ($this->_vars['user']['email_audit'] == "1"): ?>
	  			<input type="button" value="�޸�����" class="but130lan audit_email" />
	  			<?php else: ?>
	  			<input type="button" value="������֤" class="but130lan audit_email" />
	  			<?php endif; ?>
	  			
	  			<div class="clear"></div>
	  		</div>
	  		<!-- ������֤������ start-->

	  		<!-- ������֤������ end -->
	  		<?php if ($this->_vars['sms']['open'] == "1"): ?>
	  		<div class="phone_authenticate">
	  			<div class="phone_img <?php if ($this->_vars['user']['mobile_audit'] == '1'): ?>certified<?php else: ?>not_certified<?php endif; ?>"></div>
	  			<div class="phone_content">
	  				<h4>�ֻ���֤</h4>
	  				<p class="warning">�������˺Ŵ��ڱ������գ������������ֻ��������֤�Ա�֤�˺Ű�ȫ��</p>
	  				<?php if ($this->_vars['user']): ?>
	  				<p>���ĺ��룺<?php echo $this->_vars['user']['mobile']; ?>
 <?php if ($this->_vars['user']['mobile_audit'] == "1"): ?><span>����֤</span><?php else: ?><span class="no_authenticate">δ��֤</span><?php endif; ?></p>
	  				<?php endif; ?>
	  			</div>
	  			<?php if ($this->_vars['user']['mobile_audit'] == "1"): ?>
	  			<input type="button" value="�޸��ֻ�" class="but130lan edit_mobile" />
	  			<?php else: ?>
	  			<input type="button" value="������֤" class="but130lan audit_mobile" />
	  			<?php endif; ?>
	  			<div class="clear"></div>
	  		</div>
			<?php endif; ?>
			  <div class="bottomtip">
		 	   <div class="tp h2-title">С��ʿ</div>
		 	   <?php if ($this->_vars['sms']['open'] == "1"): ?>
			   ����/�ֻ�ͨ����֤�󣬿���������/�ֻ�����ֱ����Ϊ�û�����¼��<br />
				����/�ֻ�ͨ����֤������������룬����������/�ֻ��һء�<br />
				����/�ֻ�ͨ����֤�󣬵���ҵ������������ʱ�����ɼ�ʱ�յ��ʼ�/�������ѡ�
				<?php else: ?>
				����ͨ����֤�󣬿���������ֱ����Ϊ�û�����¼��<br />
				����ͨ����֤������������룬�����������һء�<br />
				����ͨ����֤�󣬵���ҵ������������ʱ�����ɼ�ʱ�յ��ʼ����ѡ�
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