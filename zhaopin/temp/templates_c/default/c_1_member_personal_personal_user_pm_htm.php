<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 10:39 ?D1��������?����?? */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html;charset=gb2312">
<title><?php echo $this->_vars['title']; ?>
</title>
<meta http-equiv="X-UA-Compatible" content="IE=7">
<link rel="shortcut icon" href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
favicon.ico" />
<meta name="author" content="��ʿCMS" />
<meta name="copyright" content="74cms.com" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_personal.css" rel="stylesheet" type="text/css" />
<link href="<?php echo $this->_vars['QISHI']['site_template']; ?>
css/user_common.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $this->_vars['QISHI']['site_template']; ?>
js/jquery.js" type='text/javascript' language="javascript"></script>

</head>
<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>

<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> > �ҵ���Ϣ</div>

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
	
	<div class="message ">
			
 	    	<div class="topnav">
			  
			<div class="titleH1">
				<div class="h1-title">�˻�����</div>
			</div>
					
			<div class="navs link_bk">
				<a href="?act=userprofile">��������</a>
				  <a href="?act=password_edit">�����޸�</a>
				  <a href="?act=authenticate">��ȫ��֤</a>
				  <a href="?act=avatars">ͷ��</a>
				  <a href="?act=pm" class="se">��Ϣ<?php if ($this->_vars['total']): ?><span class="h">(<?php echo $this->_vars['total']; ?>
)</span><?php endif; ?></a>
				   <a href="?act=login_log">��½��־</a>
				   <a href="?act=binding">�˺Ű�</a>
				  <div class="clear"></div>
			</div>
	  	</div>

	  	<div class="main">
	  		<?php if ($this->_vars['pms']): ?>
	  		<?php if (count((array)$this->_vars['pms'])): foreach ((array)$this->_vars['pms'] as $this->_vars['list']): ?>
		  <div class="list link_lan userliststyle">
		  	<div class="title">ϵͳ��Ϣ<span>(<?php echo $this->_run_modifier($this->_vars['list']['dateline'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
)</span><?php if ($this->_vars['list']['new'] == '1'): ?><u>[����Ϣ]</u><?php endif; ?></div>			
			<div class="del"><a href="?act=pm_del&pmid=<?php echo $this->_vars['list']['pmid']; ?>
">[ɾ��]</a></div>
			<div class="clear"></div>
			<p><?php echo $this->_vars['list']['message']; ?>
</p>
		  </div>
		  <?php endforeach; endif; ?>
		   <?php if ($this->_vars['page']): ?>
		<table border="0" align="center" cellpadding="0" cellspacing="0" class="link_bk">
          <tr>
            <td height="50" align="center"> <div class="page link_bk"><?php echo $this->_vars['page']; ?>
</div></td>
          </tr>
      </table>
      <?php endif; ?>
		  <?php else: ?>
		  <div class="emptytip">�Բ���û���ҵ���Ҫ����Ϣ��</div>
		  <?php endif; ?>
		 
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