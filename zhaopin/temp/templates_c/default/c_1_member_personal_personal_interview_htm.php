<?php require_once('D:\amp\www\yy\zhaopin\include\template_lite\plugins\modifier.date_format.php'); $this->register_modifier("date_format", "tpl_modifier_date_format",false);  /* V2.10 Template Lite 4 January 2007  (c) 2005-2007 Mark Dickenson. All rights reserved. Released LGPL. 2015-04-15 11:01 ?D1��������?����?? */ ?>
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
js/jquery.vtip-min.js" type="text/javascript" language="javascript"></script>
</head>

<body>
<?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/header.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
<div class="page_location link_bk">��ǰλ�ã�<a href="<?php echo $this->_vars['QISHI']['main_domain']; ?>
">��ҳ</a> > <a href="<?php echo $this->_vars['userindexurl']; ?>
">��Ա����</a> > �յ�����������</div>

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
	  <div class="interview link_bk">
 	    <div class="topnav">
		 	<div class="titleH1">
			  <div class="h1-title">�յ�����������</div>
			</div>
			<div class="navs">
				<a href="?act=<?php echo $this->_vars['act']; ?>
&look="<?php if ($_GET['look'] == ""): ?> class="se"<?php endif; ?>>����<span<?php if ($_GET['look'] == ""): ?> class="h"<?php endif; ?>>(<?php echo $this->_vars['count']['2']; ?>
)</span></a>
				  <a href="?act=<?php echo $this->_vars['act']; ?>
&look=1"<?php if ($_GET['look'] == "1"): ?> class="se"<?php endif; ?>>δ�鿴<span<?php if ($_GET['look'] == "1"): ?> class="h"<?php endif; ?>>(<?php echo $this->_vars['count']['0']; ?>
)</span></a>
				  <a href="?act=<?php echo $this->_vars['act']; ?>
&look=2"<?php if ($_GET['look'] == "2"): ?> class="se"<?php endif; ?>>�Ѳ鿴<span<?php if ($_GET['look'] == "2"): ?> class="h"<?php endif; ?>>(<?php echo $this->_vars['count']['1']; ?>
)</span></a>
				<div class="clear"></div>
			</div>
	  	</div> 
	  		<div class="toptitle">
			    <div class="t1">����ʱ��</div>
				<div class="t2">����ְλ</div>
				<div class="t3">��˾����</div>
				<div class="t4">��������</div>
				<div class="t5">����Ҫ��</div>
				<div class="clear"></div>
			</div>
			<?php if ($this->_vars['interview']): ?>
			<?php if (count((array)$this->_vars['interview'])): foreach ((array)$this->_vars['interview'] as $this->_vars['list']): ?>
			<?php if ($this->_vars['list']['wage_cn']): ?>
			<div class="ilist userliststyle">
			    <div class="t1"><?php echo $this->_run_modifier($this->_vars['list']['interview_addtime'], 'date_format', 'plugin', 1, "%Y-%m-%d"); ?>
</div>
				<div class="t2"><a href="<?php echo $this->_vars['list']['jobs_url']; ?>
" target="_blank"><?php echo $this->_vars['list']['jobs_name']; ?>
</a><?php if ($this->_vars['list']['personal_look'] == "2"): ?><span style="color: #999999">[�Ѳ鿴]</span><?php else: ?><span style="color: #FF6600">[δ�鿴]</span><?php endif; ?></div>
				<div class="t3"><a target="_blank" href="<?php echo $this->_vars['list']['company_url']; ?>
"><?php echo $this->_vars['list']['companyname']; ?>
</a></div>
				<div class="t4"><?php echo $this->_vars['list']['resume_name']; ?>
</div>
				<div class="t5"><img src="<?php echo $this->_vars['QISHI']['site_template']; ?>
images/17.jpg" width="14" height="13"  class="vtip" title="<?php echo $this->_run_modifier($this->_vars['list']['notes'], 'nl2br', 'PHP', 1); ?>
"/></div>
				<div class="clear"></div>
			</div>
			<?php else: ?>
			<div class="ilist userliststyle">
			    <div class="t1" style="width:450px;">��ְλ�����Ѿ���ɾ����</div>	
				<div class="clear"></div>
			</div>
			<?php endif; ?>
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
<div class="clear"></div>
 <?php $_templatelite_tpl_vars = $this->_vars;
echo $this->_fetch_compile_include("user/footer.htm", array());
$this->_vars = $_templatelite_tpl_vars;
unset($_templatelite_tpl_vars);
 ?>
</body>
</html>
